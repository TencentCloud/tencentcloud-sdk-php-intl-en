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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSendEmailStatus request structure.
 *
 * @method string getRequestDate() Obtain Date sent. This parameter is required. You can only query the sending status for a single date at a time.
 * @method void setRequestDate(string $RequestDate) Set Date sent. This parameter is required. You can only query the sending status for a single date at a time.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method integer getLimit() Obtain Maximum number of pulled entries. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Maximum number of pulled entries. Maximum value: `100`.
 * @method string getMessageId() Obtain The `MessageId` field returned by the `SendMail` API.
 * @method void setMessageId(string $MessageId) Set The `MessageId` field returned by the `SendMail` API.
 * @method string getToEmailAddress() Obtain Recipient email address.
 * @method void setToEmailAddress(string $ToEmailAddress) Set Recipient email address.
 */
class GetSendEmailStatusRequest extends AbstractModel
{
    /**
     * @var string Date sent. This parameter is required. You can only query the sending status for a single date at a time.
     */
    public $RequestDate;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Maximum number of pulled entries. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var string The `MessageId` field returned by the `SendMail` API.
     */
    public $MessageId;

    /**
     * @var string Recipient email address.
     */
    public $ToEmailAddress;

    /**
     * @param string $RequestDate Date sent. This parameter is required. You can only query the sending status for a single date at a time.
     * @param integer $Offset Offset. Default value: `0`.
     * @param integer $Limit Maximum number of pulled entries. Maximum value: `100`.
     * @param string $MessageId The `MessageId` field returned by the `SendMail` API.
     * @param string $ToEmailAddress Recipient email address.
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
        if (array_key_exists("RequestDate",$param) and $param["RequestDate"] !== null) {
            $this->RequestDate = $param["RequestDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ToEmailAddress",$param) and $param["ToEmailAddress"] !== null) {
            $this->ToEmailAddress = $param["ToEmailAddress"];
        }
    }
}
