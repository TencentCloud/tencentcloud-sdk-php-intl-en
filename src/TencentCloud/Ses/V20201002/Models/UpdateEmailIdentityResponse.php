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
 * UpdateEmailIdentity response structure.
 *
 * @method string getIdentityType() Obtain Verification type. The value is fixed to `DOMAIN`.
 * @method void setIdentityType(string $IdentityType) Set Verification type. The value is fixed to `DOMAIN`.
 * @method boolean getVerifiedForSendingStatus() Obtain Verification passed or not.
 * @method void setVerifiedForSendingStatus(boolean $VerifiedForSendingStatus) Set Verification passed or not.
 * @method array getAttributes() Obtain DNS information that needs to be configured.
 * @method void setAttributes(array $Attributes) Set DNS information that needs to be configured.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class UpdateEmailIdentityResponse extends AbstractModel
{
    /**
     * @var string Verification type. The value is fixed to `DOMAIN`.
     */
    public $IdentityType;

    /**
     * @var boolean Verification passed or not.
     */
    public $VerifiedForSendingStatus;

    /**
     * @var array DNS information that needs to be configured.
     */
    public $Attributes;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $IdentityType Verification type. The value is fixed to `DOMAIN`.
     * @param boolean $VerifiedForSendingStatus Verification passed or not.
     * @param array $Attributes DNS information that needs to be configured.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("VerifiedForSendingStatus",$param) and $param["VerifiedForSendingStatus"] !== null) {
            $this->VerifiedForSendingStatus = $param["VerifiedForSendingStatus"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new DNSAttributes();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
