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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKmsInstance request structure.
 *
 * @method string getInstanceChargeType() Obtain <p>Instance billing type (PREPAID).</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing type (PREPAID).</p>
 * @method string getProductVersion() Obtain <p>Version type.</p><p>Valid values:</p><ul><li>professional: Professional Edition</li></ul>
 * @method void setProductVersion(string $ProductVersion) Set <p>Version type.</p><p>Valid values:</p><ul><li>professional: Professional Edition</li></ul>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Prepaid instance information.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Prepaid instance information.</p>
 * @method string getClientToken() Obtain <p>Reentrant client ID.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Reentrant client ID.</p>
 * @method array getTags() Obtain <p>Instance tag.</p>
 * @method void setTags(array $Tags) Set <p>Instance tag.</p>
 */
class CreateKmsInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance billing type (PREPAID).</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>Version type.</p><p>Valid values:</p><ul><li>professional: Professional Edition</li></ul>
     */
    public $ProductVersion;

    /**
     * @var InstanceChargePrepaid <p>Prepaid instance information.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>Reentrant client ID.</p>
     */
    public $ClientToken;

    /**
     * @var array <p>Instance tag.</p>
     */
    public $Tags;

    /**
     * @param string $InstanceChargeType <p>Instance billing type (PREPAID).</p>
     * @param string $ProductVersion <p>Version type.</p><p>Valid values:</p><ul><li>professional: Professional Edition</li></ul>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Prepaid instance information.</p>
     * @param string $ClientToken <p>Reentrant client ID.</p>
     * @param array $Tags <p>Instance tag.</p>
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
