<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Recipient list details.
 *
 * @method string getEmail() Obtain Recipient's address.
 * @method void setEmail(string $Email) Set Recipient's address.
 * @method string getCreateTime() Obtain Creation time.


 * @method void setCreateTime(string $CreateTime) Set Creation time.


 * @method string getTemplateData() Obtain Template parameter.
 * @method void setTemplateData(string $TemplateData) Set Template parameter.
 * @method string getReason() Obtain Invalid reason.
 * @method void setReason(string $Reason) Set Invalid reason.
 * @method integer getStatus() Obtain 1: valid; 2: invalid.
 * @method void setStatus(integer $Status) Set 1: valid; 2: invalid.
 * @method integer getEmailId() Obtain Recipient address id.
 * @method void setEmailId(integer $EmailId) Set Recipient address id.
 */
class ReceiverDetail extends AbstractModel
{
    /**
     * @var string Recipient's address.
     */
    public $Email;

    /**
     * @var string Creation time.


     */
    public $CreateTime;

    /**
     * @var string Template parameter.
     */
    public $TemplateData;

    /**
     * @var string Invalid reason.
     */
    public $Reason;

    /**
     * @var integer 1: valid; 2: invalid.
     */
    public $Status;

    /**
     * @var integer Recipient address id.
     */
    public $EmailId;

    /**
     * @param string $Email Recipient's address.
     * @param string $CreateTime Creation time.


     * @param string $TemplateData Template parameter.
     * @param string $Reason Invalid reason.
     * @param integer $Status 1: valid; 2: invalid.
     * @param integer $EmailId Recipient address id.
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TemplateData",$param) and $param["TemplateData"] !== null) {
            $this->TemplateData = $param["TemplateData"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EmailId",$param) and $param["EmailId"] !== null) {
            $this->EmailId = $param["EmailId"];
        }
    }
}
