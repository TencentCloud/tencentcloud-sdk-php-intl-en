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
 * Route table
 *
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 * @method string getRouteTableId() Obtain Route table instance ID
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID
 * @method string getRouteTableName() Obtain Route table name
 * @method void setRouteTableName(string $RouteTableName) Set Route table name
 * @method array getAssociationSet() Obtain Association relationships of the route table
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAssociationSet(array $AssociationSet) Set Association relationships of the route table
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRouteSet() Obtain IPv4 routing policy set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRouteSet(array $RouteSet) Set IPv4 routing policy set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getMain() Obtain Whether it is the default route table
 * @method void setMain(boolean $Main) Set Whether it is the default route table
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 */
class RouteTable extends AbstractModel
{
    /**
     * @var string VPC instance ID
     */
    public $VpcId;

    /**
     * @var string Route table instance ID
     */
    public $RouteTableId;

    /**
     * @var string Route table name
     */
    public $RouteTableName;

    /**
     * @var array Association relationships of the route table
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AssociationSet;

    /**
     * @var array IPv4 routing policy set
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RouteSet;

    /**
     * @var boolean Whether it is the default route table
     */
    public $Main;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @param string $VpcId VPC instance ID
     * @param string $RouteTableId Route table instance ID
     * @param string $RouteTableName Route table name
     * @param array $AssociationSet Association relationships of the route table
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RouteSet IPv4 routing policy set
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Main Whether it is the default route table
     * @param string $CreatedTime Creation time
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

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("AssociationSet",$param) and $param["AssociationSet"] !== null) {
            $this->AssociationSet = [];
            foreach ($param["AssociationSet"] as $key => $value){
                $obj = new RouteTableAssociation();
                $obj->deserialize($value);
                array_push($this->AssociationSet, $obj);
            }
        }

        if (array_key_exists("RouteSet",$param) and $param["RouteSet"] !== null) {
            $this->RouteSet = [];
            foreach ($param["RouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->RouteSet, $obj);
            }
        }

        if (array_key_exists("Main",$param) and $param["Main"] !== null) {
            $this->Main = $param["Main"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
