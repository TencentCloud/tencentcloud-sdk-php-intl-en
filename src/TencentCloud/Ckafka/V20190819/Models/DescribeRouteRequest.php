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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoute request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method integer getRouteId() Obtain <p>Route Id</p>
 * @method void setRouteId(integer $RouteId) Set <p>Route Id</p>
 * @method boolean getMainRouteFlag() Obtain <p>Whether to display the primary route. If true, the primary route information during instance creation will additionally be displayed on the basis of the original routing list (and will not be affected by parameter filtering such as InternalFlag or UsedFor).</p>
 * @method void setMainRouteFlag(boolean $MainRouteFlag) Set <p>Whether to display the primary route. If true, the primary route information during instance creation will additionally be displayed on the basis of the original routing list (and will not be affected by parameter filtering such as InternalFlag or UsedFor).</p>
 */
class DescribeRouteRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Route Id</p>
     */
    public $RouteId;

    /**
     * @var boolean <p>Whether to display the primary route. If true, the primary route information during instance creation will additionally be displayed on the basis of the original routing list (and will not be affected by parameter filtering such as InternalFlag or UsedFor).</p>
     */
    public $MainRouteFlag;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param integer $RouteId <p>Route Id</p>
     * @param boolean $MainRouteFlag <p>Whether to display the primary route. If true, the primary route information during instance creation will additionally be displayed on the basis of the original routing list (and will not be affected by parameter filtering such as InternalFlag or UsedFor).</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("MainRouteFlag",$param) and $param["MainRouteFlag"] !== null) {
            $this->MainRouteFlag = $param["MainRouteFlag"];
        }
    }
}
