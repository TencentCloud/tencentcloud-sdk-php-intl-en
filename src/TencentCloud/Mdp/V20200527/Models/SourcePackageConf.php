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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source file information.
 *
 * @method string getGroupName() Obtain Group name. When the channel is in Linear mode and vod source is selected, the group name corresponds to the output group name of the channel output.
 * @method void setGroupName(string $GroupName) Set Group name. When the channel is in Linear mode and vod source is selected, the group name corresponds to the output group name of the channel output.
 * @method string getType() Obtain Type, distinguish between HLS and DASH, optional values: HLS, DASH.
 * @method void setType(string $Type) Set Type, distinguish between HLS and DASH, optional values: HLS, DASH.
 * @method string getPath() Obtain access path.
 * @method void setPath(string $Path) Set access path.
 */
class SourcePackageConf extends AbstractModel
{
    /**
     * @var string Group name. When the channel is in Linear mode and vod source is selected, the group name corresponds to the output group name of the channel output.
     */
    public $GroupName;

    /**
     * @var string Type, distinguish between HLS and DASH, optional values: HLS, DASH.
     */
    public $Type;

    /**
     * @var string access path.
     */
    public $Path;

    /**
     * @param string $GroupName Group name. When the channel is in Linear mode and vod source is selected, the group name corresponds to the output group name of the channel output.
     * @param string $Type Type, distinguish between HLS and DASH, optional values: HLS, DASH.
     * @param string $Path access path.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
