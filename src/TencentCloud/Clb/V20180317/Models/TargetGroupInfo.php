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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target group information
 *
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method string getVpcId() Obtain `vpcid` of target group
 * @method void setVpcId(string $VpcId) Set `vpcid` of target group
 * @method string getTargetGroupName() Obtain Target group name
 * @method void setTargetGroupName(string $TargetGroupName) Set Target group name
 * @method integer getPort() Obtain Default port of target group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Default port of target group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Target group creation time
 * @method void setCreatedTime(string $CreatedTime) Set Target group creation time
 * @method string getUpdatedTime() Obtain Target group modification time
 * @method void setUpdatedTime(string $UpdatedTime) Set Target group modification time
 * @method array getAssociatedRule() Obtain Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssociatedRule(array $AssociatedRule) Set Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
 */
class TargetGroupInfo extends AbstractModel
{
    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var string `vpcid` of target group
     */
    public $VpcId;

    /**
     * @var string Target group name
     */
    public $TargetGroupName;

    /**
     * @var integer Default port of target group
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Target group creation time
     */
    public $CreatedTime;

    /**
     * @var string Target group modification time
     */
    public $UpdatedTime;

    /**
     * @var array Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssociatedRule;

    /**
     * @param string $TargetGroupId Target group ID
     * @param string $VpcId `vpcid` of target group
     * @param string $TargetGroupName Target group name
     * @param integer $Port Default port of target group
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Target group creation time
     * @param string $UpdatedTime Target group modification time
     * @param array $AssociatedRule Associated rule array. This parameter cannot be obtained when the DescribeTargetGroupList API is called.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("AssociatedRule",$param) and $param["AssociatedRule"] !== null) {
            $this->AssociatedRule = [];
            foreach ($param["AssociatedRule"] as $key => $value){
                $obj = new AssociationItem();
                $obj->deserialize($value);
                array_push($this->AssociatedRule, $obj);
            }
        }
    }
}
