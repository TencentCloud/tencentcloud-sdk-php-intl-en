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
 * DeleteCloudNativeAPIGatewayCORS request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getSourceType() Obtain Resource type bound to the cross-origin plug-in: route|service
 * @method void setSourceType(string $SourceType) Set Resource type bound to the cross-origin plug-in: route|service
 * @method string getSourceId() Obtain id of the route or service
 * @method void setSourceId(string $SourceId) Set id of the route or service
 */
class DeleteCloudNativeAPIGatewayCORSRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var string Resource type bound to the cross-origin plug-in: route|service
     */
    public $SourceType;

    /**
     * @var string id of the route or service
     */
    public $SourceId;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $SourceType Resource type bound to the cross-origin plug-in: route|service
     * @param string $SourceId id of the route or service
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

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }
    }
}
