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
 * CreateRouteTable request structure.
 *
 * @method string getVpcId() Obtain The ID of the VPC instance to be operated on. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
 * @method void setVpcId(string $VpcId) Set The ID of the VPC instance to be operated on. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
 * @method string getRouteTableName() Obtain The route table name. The maximum length is 60 characters.
 * @method void setRouteTableName(string $RouteTableName) Set The route table name. The maximum length is 60 characters.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateRouteTableRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPC instance to be operated on. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
     */
    public $VpcId;

    /**
     * @var string The route table name. The maximum length is 60 characters.
     */
    public $RouteTableName;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $VpcId The ID of the VPC instance to be operated on. You can obtain the parameter value from the VpcId field in the returned result of DescribeVpcs API.
     * @param string $RouteTableName The route table name. The maximum length is 60 characters.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
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
