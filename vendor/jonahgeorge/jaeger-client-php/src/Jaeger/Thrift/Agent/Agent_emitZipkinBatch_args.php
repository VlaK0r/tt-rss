<?php
namespace Jaeger\Thrift\Agent;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Agent_emitZipkinBatch_args extends TBase {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'spans',
      'isRequired' => false,
      'type' => TType::LST,
      'etype' => TType::STRUCT,
      'elem' => array(
        'type' => TType::STRUCT,
        'class' => '\Jaeger\Thrift\Agent\Zipkin\Span',
        ),
      ),
    );

  /**
   * @var \Jaeger\Thrift\Agent\Zipkin\Span[]
   */
  public $spans = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'Agent_emitZipkinBatch_args';
  }

  public function read($input)
  {
    return $this->_read('Agent_emitZipkinBatch_args', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('Agent_emitZipkinBatch_args', self::$_TSPEC, $output);
  }

}
