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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosAuditObjectIdentifyStatus request structure.
 *
 * @method string getResourceId() Obtain <p>Resource id</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource id</p>
 * @method integer getTextIdentifyStatus() Obtain <p>Text recognition status</p>
 * @method void setTextIdentifyStatus(integer $TextIdentifyStatus) Set <p>Text recognition status</p>
 * @method integer getImageIdentifyStatus() Obtain <p>Image recognition status</p>
 * @method void setImageIdentifyStatus(integer $ImageIdentifyStatus) Set <p>Image recognition status</p>
 */
class ModifyCosAuditObjectIdentifyStatusRequest extends AbstractModel
{
    /**
     * @var string <p>Resource id</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>Text recognition status</p>
     */
    public $TextIdentifyStatus;

    /**
     * @var integer <p>Image recognition status</p>
     */
    public $ImageIdentifyStatus;

    /**
     * @param string $ResourceId <p>Resource id</p>
     * @param integer $TextIdentifyStatus <p>Text recognition status</p>
     * @param integer $ImageIdentifyStatus <p>Image recognition status</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TextIdentifyStatus",$param) and $param["TextIdentifyStatus"] !== null) {
            $this->TextIdentifyStatus = $param["TextIdentifyStatus"];
        }

        if (array_key_exists("ImageIdentifyStatus",$param) and $param["ImageIdentifyStatus"] !== null) {
            $this->ImageIdentifyStatus = $param["ImageIdentifyStatus"];
        }
    }
}
