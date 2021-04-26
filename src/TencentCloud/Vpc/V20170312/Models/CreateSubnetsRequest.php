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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubnets request structure.
 *
 * @method string getVpcId() Obtain The `ID` of the `VPC` instance, such as `vpc-6v2ht8q5`.
 * @method void setVpcId(string $VpcId) Set The `ID` of the `VPC` instance, such as `vpc-6v2ht8q5`.
 * @method array getSubnets() Obtain The subnet object list.
 * @method void setSubnets(array $Subnets) Set The subnet object list.
 * @method array getTags() Obtain Bound tags. Note that the collection of tags here is shared by all subnet objects in the list. You cannot specify tags for each subnet. Example: [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags. Note that the collection of tags here is shared by all subnet objects in the list. You cannot specify tags for each subnet. Example: [{"Key": "city", "Value": "shanghai"}].
 * @method string getCdcId() Obtain ID of the CDC instance to which the subnets will be created
 * @method void setCdcId(string $CdcId) Set ID of the CDC instance to which the subnets will be created
 */
class CreateSubnetsRequest extends AbstractModel
{
    /**
     * @var string The `ID` of the `VPC` instance, such as `vpc-6v2ht8q5`.
     */
    public $VpcId;

    /**
     * @var array The subnet object list.
     */
    public $Subnets;

    /**
     * @var array Bound tags. Note that the collection of tags here is shared by all subnet objects in the list. You cannot specify tags for each subnet. Example: [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @var string ID of the CDC instance to which the subnets will be created
     */
    public $CdcId;

    /**
     * @param string $VpcId The `ID` of the `VPC` instance, such as `vpc-6v2ht8q5`.
     * @param array $Subnets The subnet object list.
     * @param array $Tags Bound tags. Note that the collection of tags here is shared by all subnet objects in the list. You cannot specify tags for each subnet. Example: [{"Key": "city", "Value": "shanghai"}].
     * @param string $CdcId ID of the CDC instance to which the subnets will be created
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

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = [];
            foreach ($param["Subnets"] as $key => $value){
                $obj = new SubnetInput();
                $obj->deserialize($value);
                array_push($this->Subnets, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
