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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The DRM encryption details.
 *
 * @method string getType() Obtain The encryption type.
<li>`simpleaes`: AES-128 encryption.</li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The encryption type.
<li>`simpleaes`: AES-128 encryption.</li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method SimpleAesDrm getSimpleAesDrm() Obtain The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSimpleAesDrm(SimpleAesDrm $SimpleAesDrm) Set The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class DrmInfo extends AbstractModel
{
    /**
     * @var string The encryption type.
<li>`simpleaes`: AES-128 encryption.</li>
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var SimpleAesDrm The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SimpleAesDrm;

    /**
     * @param string $Type The encryption type.
<li>`simpleaes`: AES-128 encryption.</li>
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param SimpleAesDrm $SimpleAesDrm The AES-128 encryption details.
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SimpleAesDrm",$param) and $param["SimpleAesDrm"] !== null) {
            $this->SimpleAesDrm = new SimpleAesDrm();
            $this->SimpleAesDrm->deserialize($param["SimpleAesDrm"]);
        }
    }
}
