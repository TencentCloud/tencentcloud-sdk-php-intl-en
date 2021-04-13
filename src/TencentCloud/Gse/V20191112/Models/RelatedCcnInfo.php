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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CCN information description
 *
 * @method string getAccountId() Obtain CCN account
 * @method void setAccountId(string $AccountId) Set CCN account
 * @method string getCcnId() Obtain CCN ID
 * @method void setCcnId(string $CcnId) Set CCN ID
 * @method string getAttachType() Obtain Status of associated CCN
 * @method void setAttachType(string $AttachType) Set Status of associated CCN
 */
class RelatedCcnInfo extends AbstractModel
{
    /**
     * @var string CCN account
     */
    public $AccountId;

    /**
     * @var string CCN ID
     */
    public $CcnId;

    /**
     * @var string Status of associated CCN
     */
    public $AttachType;

    /**
     * @param string $AccountId CCN account
     * @param string $CcnId CCN ID
     * @param string $AttachType Status of associated CCN
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }
    }
}
