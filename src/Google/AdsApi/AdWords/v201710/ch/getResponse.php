<?php

namespace Google\AdsApi\AdWords\v201710\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\ch\CustomerChangeData $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\ch\CustomerChangeData $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\ch\CustomerChangeData
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\ch\CustomerChangeData $rval
     * @return \Google\AdsApi\AdWords\v201710\ch\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
