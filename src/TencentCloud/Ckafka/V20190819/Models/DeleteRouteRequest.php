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
 * DeleteRoute request structure.
 *
 * @method string getInstanceId() Obtain ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method void setInstanceId(string $InstanceId) Set ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method integer getRouteId() Obtain Route id, obtain through the API [DescribeRoute](https://www.tencentcloud.comom/document/product/597/45484?from_cn_redirect=1).
 * @method void setRouteId(integer $RouteId) Set Route id, obtain through the API [DescribeRoute](https://www.tencentcloud.comom/document/product/597/45484?from_cn_redirect=1).
 * @method integer getCallerAppid() Obtain AppId of the caller.
 * @method void setCallerAppid(integer $CallerAppid) Set AppId of the caller.
 * @method string getDeleteRouteTime() Obtain Sets the scheduled deletion time for routes. only public network routes support scheduled deletion. available for any time within the next 24 hours.
 * @method void setDeleteRouteTime(string $DeleteRouteTime) Set Sets the scheduled deletion time for routes. only public network routes support scheduled deletion. available for any time within the next 24 hours.
 */
class DeleteRouteRequest extends AbstractModel
{
    /**
     * @var string ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     */
    public $InstanceId;

    /**
     * @var integer Route id, obtain through the API [DescribeRoute](https://www.tencentcloud.comom/document/product/597/45484?from_cn_redirect=1).
     */
    public $RouteId;

    /**
     * @var integer AppId of the caller.
     */
    public $CallerAppid;

    /**
     * @var string Sets the scheduled deletion time for routes. only public network routes support scheduled deletion. available for any time within the next 24 hours.
     */
    public $DeleteRouteTime;

    /**
     * @param string $InstanceId ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     * @param integer $RouteId Route id, obtain through the API [DescribeRoute](https://www.tencentcloud.comom/document/product/597/45484?from_cn_redirect=1).
     * @param integer $CallerAppid AppId of the caller.
     * @param string $DeleteRouteTime Sets the scheduled deletion time for routes. only public network routes support scheduled deletion. available for any time within the next 24 hours.
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

        if (array_key_exists("CallerAppid",$param) and $param["CallerAppid"] !== null) {
            $this->CallerAppid = $param["CallerAppid"];
        }

        if (array_key_exists("DeleteRouteTime",$param) and $param["DeleteRouteTime"] !== null) {
            $this->DeleteRouteTime = $param["DeleteRouteTime"];
        }
    }
}
