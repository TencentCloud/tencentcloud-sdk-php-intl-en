<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Receipt statistics response packet
 *
 * @method integer getCallbackCount() Obtain SMS receipts.
 * @method void setCallbackCount(integer $CallbackCount) Set SMS receipts.
 * @method integer getRequestSuccessCount() Obtain Successfully submitted SMS messages.
 * @method void setRequestSuccessCount(integer $RequestSuccessCount) Set Successfully submitted SMS messages.
 * @method integer getCallbackFailCount() Obtain Failed SMS receipts.
 * @method void setCallbackFailCount(integer $CallbackFailCount) Set Failed SMS receipts.
 * @method integer getCallbackSuccessCount() Obtain Successful SMS receipts.
 * @method void setCallbackSuccessCount(integer $CallbackSuccessCount) Set Successful SMS receipts.
 * @method integer getInternalErrorCount() Obtain Internal carrier errors.
 * @method void setInternalErrorCount(integer $InternalErrorCount) Set Internal carrier errors.
 * @method integer getInvalidNumberCount() Obtain Invalid or empty mobile numbers.
 * @method void setInvalidNumberCount(integer $InvalidNumberCount) Set Invalid or empty mobile numbers.
 * @method integer getShutdownErrorCount() Obtain Errors such as out-of-service or power-off.
 * @method void setShutdownErrorCount(integer $ShutdownErrorCount) Set Errors such as out-of-service or power-off.
 * @method integer getBlackListCount() Obtain Blacklisted mobile numbers.
 * @method void setBlackListCount(integer $BlackListCount) Set Blacklisted mobile numbers.
 * @method integer getFrequencyLimitCount() Obtain Carrier frequency limit hits.
 * @method void setFrequencyLimitCount(integer $FrequencyLimitCount) Set Carrier frequency limit hits.
 */
class CallbackStatusStatistics extends AbstractModel
{
    /**
     * @var integer SMS receipts.
     */
    public $CallbackCount;

    /**
     * @var integer Successfully submitted SMS messages.
     */
    public $RequestSuccessCount;

    /**
     * @var integer Failed SMS receipts.
     */
    public $CallbackFailCount;

    /**
     * @var integer Successful SMS receipts.
     */
    public $CallbackSuccessCount;

    /**
     * @var integer Internal carrier errors.
     */
    public $InternalErrorCount;

    /**
     * @var integer Invalid or empty mobile numbers.
     */
    public $InvalidNumberCount;

    /**
     * @var integer Errors such as out-of-service or power-off.
     */
    public $ShutdownErrorCount;

    /**
     * @var integer Blacklisted mobile numbers.
     */
    public $BlackListCount;

    /**
     * @var integer Carrier frequency limit hits.
     */
    public $FrequencyLimitCount;

    /**
     * @param integer $CallbackCount SMS receipts.
     * @param integer $RequestSuccessCount Successfully submitted SMS messages.
     * @param integer $CallbackFailCount Failed SMS receipts.
     * @param integer $CallbackSuccessCount Successful SMS receipts.
     * @param integer $InternalErrorCount Internal carrier errors.
     * @param integer $InvalidNumberCount Invalid or empty mobile numbers.
     * @param integer $ShutdownErrorCount Errors such as out-of-service or power-off.
     * @param integer $BlackListCount Blacklisted mobile numbers.
     * @param integer $FrequencyLimitCount Carrier frequency limit hits.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CallbackCount",$param) and $param["CallbackCount"] !== null) {
            $this->CallbackCount = $param["CallbackCount"];
        }

        if (array_key_exists("RequestSuccessCount",$param) and $param["RequestSuccessCount"] !== null) {
            $this->RequestSuccessCount = $param["RequestSuccessCount"];
        }

        if (array_key_exists("CallbackFailCount",$param) and $param["CallbackFailCount"] !== null) {
            $this->CallbackFailCount = $param["CallbackFailCount"];
        }

        if (array_key_exists("CallbackSuccessCount",$param) and $param["CallbackSuccessCount"] !== null) {
            $this->CallbackSuccessCount = $param["CallbackSuccessCount"];
        }

        if (array_key_exists("InternalErrorCount",$param) and $param["InternalErrorCount"] !== null) {
            $this->InternalErrorCount = $param["InternalErrorCount"];
        }

        if (array_key_exists("InvalidNumberCount",$param) and $param["InvalidNumberCount"] !== null) {
            $this->InvalidNumberCount = $param["InvalidNumberCount"];
        }

        if (array_key_exists("ShutdownErrorCount",$param) and $param["ShutdownErrorCount"] !== null) {
            $this->ShutdownErrorCount = $param["ShutdownErrorCount"];
        }

        if (array_key_exists("BlackListCount",$param) and $param["BlackListCount"] !== null) {
            $this->BlackListCount = $param["BlackListCount"];
        }

        if (array_key_exists("FrequencyLimitCount",$param) and $param["FrequencyLimitCount"] !== null) {
            $this->FrequencyLimitCount = $param["FrequencyLimitCount"];
        }
    }
}
