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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudNativeAPIGateway request structure.
 *
 * @method string getGatewayId() Obtain Cloud native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud native API gateway instance ID.
 * @method boolean getDeleteClsTopic() Obtain Whether to delete the CLS log topic associated with the instance.
 * @method void setDeleteClsTopic(boolean $DeleteClsTopic) Set Whether to delete the CLS log topic associated with the instance.
 */
class DeleteCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string Cloud native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var boolean Whether to delete the CLS log topic associated with the instance.
     */
    public $DeleteClsTopic;

    /**
     * @param string $GatewayId Cloud native API gateway instance ID.
     * @param boolean $DeleteClsTopic Whether to delete the CLS log topic associated with the instance.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("DeleteClsTopic",$param) and $param["DeleteClsTopic"] !== null) {
            $this->DeleteClsTopic = $param["DeleteClsTopic"];
        }
    }
}
