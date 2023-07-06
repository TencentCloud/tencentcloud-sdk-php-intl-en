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
 * Data structure returned by operation
 *
 * @method integer getFlowId() Obtain FlowId11
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFlowId(integer $FlowId) Set FlowId11
Note: this field may return null, indicating that no valid values can be obtained.
 * @method RouteDTO getRouteDTO() Obtain RouteIdDto Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRouteDTO(RouteDTO $RouteDTO) Set RouteIdDto Note: This field may return null, indicating that no valid values can be obtained.
 */
class OperateResponseData extends AbstractModel
{
    /**
     * @var integer FlowId11
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FlowId;

    /**
     * @var RouteDTO RouteIdDto Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RouteDTO;

    /**
     * @param integer $FlowId FlowId11
Note: this field may return null, indicating that no valid values can be obtained.
     * @param RouteDTO $RouteDTO RouteIdDto Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RouteDTO",$param) and $param["RouteDTO"] !== null) {
            $this->RouteDTO = new RouteDTO();
            $this->RouteDTO->deserialize($param["RouteDTO"]);
        }
    }
}
