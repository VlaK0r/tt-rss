/* global Plugins, Headlines, dojo, App, xhr, Notify, fox, __ */

Plugins.Mail = {
	send: function(id) {
		if (!id) {
			const ids = Headlines.getSelected();

			if (ids.length == 0) {
				alert(__("No articles selected."));
				return;
			}

			id = ids.toString();
		}

		const dialog = new fox.SingleUseDialog({
			title: __("Forward article by email"),
			execute: function () {
				if (this.validate()) {
					xhr.json("backend.php", this.attr('value'), (reply) => {
						if (reply) {
							const error = reply['error'];

							if (error) {
								alert(__('Error sending email:') + ' ' + error);
							} else {
								Notify.info('Your message has been sent.');
								dialog.hide();
							}

						}
					});
				}
			},
			content: __("Loading, please wait...")
		});

		const tmph = dojo.connect(dialog, 'onShow', function () {
			dojo.disconnect(tmph);

			xhr.post("backend.php", App.getPhArgs("mail", "emailArticle", {ids: id}), (reply) => {
				dialog.attr('content', reply);
			});
		});

		dialog.show();
	},
	onHotkey: function(id) {
		Plugins.Mail.send(id);
	}
};
