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
 * The object of the CCN route (IDC IP range) of the Direct Connect gateway
 *
 * @method string getRouteId() Obtain Route ID.
 * @method void setRouteId(string $RouteId) Set Route ID.
 * @method string getDestinationCidrBlock() Obtain IDC IP range.
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set IDC IP range.
 * @method array getASPath() Obtain The `AS-Path` attribute of `BGP`.
 * @method void setASPath(array $ASPath) Set The `AS-Path` attribute of `BGP`.
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method string getUpdateTime() Obtain Last updated time
 * @method void setUpdateTime(string $UpdateTime) Set Last updated time
 */
class DirectConnectGatewayCcnRoute extends AbstractModel
{
    /**
     * @var string Route ID.
     */
    public $RouteId;

    /**
     * @var string IDC IP range.
     */
    public $DestinationCidrBlock;

    /**
     * @var array The `AS-Path` attribute of `BGP`.
     */
    public $ASPath;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var string Last updated time
     */
    public $UpdateTime;

    /**
     * @param string $RouteId Route ID.
     * @param string $DestinationCidrBlock IDC IP range.
     * @param array $ASPath The `AS-Path` attribute of `BGP`.
     * @param string $Description Remarks
     * @param string $UpdateTime Last updated time
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("ASPath",$param) and $param["ASPath"] !== null) {
            $this->ASPath = $param["ASPath"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
