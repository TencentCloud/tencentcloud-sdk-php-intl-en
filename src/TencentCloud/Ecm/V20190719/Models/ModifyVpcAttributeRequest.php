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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcAttribute request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID, such as `vpc-f49l6u0z`.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, such as `vpc-f49l6u0z`.
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getVpcName() Obtain VPC name, which can be customized with up to 60 characters.
 * @method void setVpcName(string $VpcName) Set VPC name, which can be customized with up to 60 characters.
 * @method array getTags() Obtain Tags
 * @method void setTags(array $Tags) Set Tags
 * @method string getDescription() Obtain VPC description
 * @method void setDescription(string $Description) Set VPC description
 */
class ModifyVpcAttributeRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID, such as `vpc-f49l6u0z`.
     */
    public $VpcId;

    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string VPC name, which can be customized with up to 60 characters.
     */
    public $VpcName;

    /**
     * @var array Tags
     */
    public $Tags;

    /**
     * @var string VPC description
     */
    public $Description;

    /**
     * @param string $VpcId VPC instance ID, such as `vpc-f49l6u0z`.
     * @param string $EcmRegion ECM region
     * @param string $VpcName VPC name, which can be customized with up to 60 characters.
     * @param array $Tags Tags
     * @param string $Description VPC description
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
