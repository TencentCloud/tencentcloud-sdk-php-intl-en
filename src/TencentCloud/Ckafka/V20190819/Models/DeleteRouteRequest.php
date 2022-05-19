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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoute request structure.
 *
 * @method string getInstanceId() Obtain Unique instance ID.
 * @method void setInstanceId(string $InstanceId) Set Unique instance ID.
 * @method integer getRouteId() Obtain Route ID.
 * @method void setRouteId(integer $RouteId) Set Route ID.
 * @method integer getCallerAppid() Obtain AppId of the caller.
 * @method void setCallerAppid(integer $CallerAppid) Set AppId of the caller.
 * @method string getDeleteRouteTime() Obtain The time when a route was deleted.
 * @method void setDeleteRouteTime(string $DeleteRouteTime) Set The time when a route was deleted.
 */
class DeleteRouteRequest extends AbstractModel
{
    /**
     * @var string Unique instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Route ID.
     */
    public $RouteId;

    /**
     * @var integer AppId of the caller.
     */
    public $CallerAppid;

    /**
     * @var string The time when a route was deleted.
     */
    public $DeleteRouteTime;

    /**
     * @param string $InstanceId Unique instance ID.
     * @param integer $RouteId Route ID.
     * @param integer $CallerAppid AppId of the caller.
     * @param string $DeleteRouteTime The time when a route was deleted.
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
