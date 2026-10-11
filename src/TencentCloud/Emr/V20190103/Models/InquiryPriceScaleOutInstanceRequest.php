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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceScaleOutInstance request structure.
 *
 * @method string getTimeUnit() Obtain <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method integer getTimeSpan() Obtain <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
 * @method integer getZoneId() Obtain <p>ID of the AZ to which the instance belongs, for example, 100003. This parameter can be obtained from the ZoneId field in the response of <a href="https://www.tencentcloud.com/document/api/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>ID of the AZ to which the instance belongs, for example, 100003. This parameter can be obtained from the ZoneId field in the response of <a href="https://www.tencentcloud.com/document/api/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
 * @method integer getPayMode() Obtain <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method void setPayMode(integer $PayMode) Set <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getCoreCount() Obtain <p>Number of Core nodes to be scaled out.</p>
 * @method void setCoreCount(integer $CoreCount) Set <p>Number of Core nodes to be scaled out.</p>
 * @method integer getTaskCount() Obtain <p>Number of Task nodes to be scaled out.</p>
 * @method void setTaskCount(integer $TaskCount) Set <p>Number of Task nodes to be scaled out.</p>
 * @method string getCurrency() Obtain <p>Currency type. Valid values:</p><li>CNY: RMB</li>
 * @method void setCurrency(string $Currency) Set <p>Currency type. Valid values:</p><li>CNY: RMB</li>
 * @method integer getRouterCount() Obtain <p>Number of Router nodes to be scaled out.</p>
 * @method void setRouterCount(integer $RouterCount) Set <p>Number of Router nodes to be scaled out.</p>
 * @method integer getMasterCount() Obtain <p>Number of Master nodes to be scaled out.</p>
 * @method void setMasterCount(integer $MasterCount) Set <p>Number of Master nodes to be scaled out.</p>
 * @method string getResourceBaseType() Obtain <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
 * @method void setResourceBaseType(string $ResourceBaseType) Set <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
 * @method string getComputeResourceId() Obtain <p>Computing resource ID.</p>
 * @method void setComputeResourceId(string $ComputeResourceId) Set <p>Computing resource ID.</p>
 * @method string getHardwareResourceType() Obtain <p>Scale-out resource type.</p>
 * @method void setHardwareResourceType(string $HardwareResourceType) Set <p>Scale-out resource type.</p>
 * @method string getNodeGroupId() Obtain <p>Node group ID.</p>
 * @method void setNodeGroupId(string $NodeGroupId) Set <p>Node group ID.</p>
 */
class InquiryPriceScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     */
    public $TimeSpan;

    /**
     * @var integer <p>ID of the AZ to which the instance belongs, for example, 100003. This parameter can be obtained from the ZoneId field in the response of <a href="https://www.tencentcloud.com/document/api/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     */
    public $PayMode;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Number of Core nodes to be scaled out.</p>
     */
    public $CoreCount;

    /**
     * @var integer <p>Number of Task nodes to be scaled out.</p>
     */
    public $TaskCount;

    /**
     * @var string <p>Currency type. Valid values:</p><li>CNY: RMB</li>
     */
    public $Currency;

    /**
     * @var integer <p>Number of Router nodes to be scaled out.</p>
     */
    public $RouterCount;

    /**
     * @var integer <p>Number of Master nodes to be scaled out.</p>
     */
    public $MasterCount;

    /**
     * @var string <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>Computing resource ID.</p>
     */
    public $ComputeResourceId;

    /**
     * @var string <p>Scale-out resource type.</p>
     */
    public $HardwareResourceType;

    /**
     * @var string <p>Node group ID.</p>
     */
    public $NodeGroupId;

    /**
     * @param string $TimeUnit <p>Time unit for the scale-out. Valid values:</p><li>s: indicates seconds. When PayMode is set to 0, TimeUnit can only be set to s.</li><li>m: indicates months. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     * @param integer $TimeSpan <p>Scale-out duration, which is used together with TimeUnit.</p><li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li><li>When TimeUnit is set to m, the value set for this parameter indicates the subscription duration of the instance. For example, 1 indicates a one-month subscription.</li>
     * @param integer $ZoneId <p>ID of the AZ to which the instance belongs, for example, 100003. This parameter can be obtained from the ZoneId field in the response of <a href="https://www.tencentcloud.com/document/api/213/15707?from_cn_redirect=1">DescribeZones</a>.</p>
     * @param integer $PayMode <p>Instance billing mode. Valid values:</p><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $CoreCount <p>Number of Core nodes to be scaled out.</p>
     * @param integer $TaskCount <p>Number of Task nodes to be scaled out.</p>
     * @param string $Currency <p>Currency type. Valid values:</p><li>CNY: RMB</li>
     * @param integer $RouterCount <p>Number of Router nodes to be scaled out.</p>
     * @param integer $MasterCount <p>Number of Master nodes to be scaled out.</p>
     * @param string $ResourceBaseType <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
     * @param string $ComputeResourceId <p>Computing resource ID.</p>
     * @param string $HardwareResourceType <p>Scale-out resource type.</p>
     * @param string $NodeGroupId <p>Node group ID.</p>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RouterCount",$param) and $param["RouterCount"] !== null) {
            $this->RouterCount = $param["RouterCount"];
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("NodeGroupId",$param) and $param["NodeGroupId"] !== null) {
            $this->NodeGroupId = $param["NodeGroupId"];
        }
    }
}
