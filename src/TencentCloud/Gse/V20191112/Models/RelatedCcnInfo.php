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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the associated CCN instance
 *
 * @method string getAccountId() Obtain Account of the CCN instance owner
 * @method void setAccountId(string $AccountId) Set Account of the CCN instance owner
 * @method string getCcnId() Obtain CCN instance ID
 * @method void setCcnId(string $CcnId) Set CCN instance ID
 * @method string getAttachType() Obtain Status of associated CCN instance
 * @method void setAttachType(string $AttachType) Set Status of associated CCN instance
 */
class RelatedCcnInfo extends AbstractModel
{
    /**
     * @var string Account of the CCN instance owner
     */
    public $AccountId;

    /**
     * @var string CCN instance ID
     */
    public $CcnId;

    /**
     * @var string Status of associated CCN instance
     */
    public $AttachType;

    /**
     * @param string $AccountId Account of the CCN instance owner
     * @param string $CcnId CCN instance ID
     * @param string $AttachType Status of associated CCN instance
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
