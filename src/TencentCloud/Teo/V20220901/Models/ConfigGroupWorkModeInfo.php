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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version management configuration group working mode information.
 *
 * @method string getConfigGroupType() Obtain Configuration group type. Options are as follows:<li>l7_acceleration: layer-7 acceleration configuration group;</li><li>edge_functions: edge function configuration group.</li><li>web_security: web protection configuration group.</li>
 * @method void setConfigGroupType(string $ConfigGroupType) Set Configuration group type. Options are as follows:<li>l7_acceleration: layer-7 acceleration configuration group;</li><li>edge_functions: edge function configuration group.</li><li>web_security: web protection configuration group.</li>
 * @method string getWorkMode() Obtain Working mode. options are as follows: <li>immediate_effect: immediate effect mode;</li><li>version_control: version management mode.</li>.
 * @method void setWorkMode(string $WorkMode) Set Working mode. options are as follows: <li>immediate_effect: immediate effect mode;</li><li>version_control: version management mode.</li>.
 */
class ConfigGroupWorkModeInfo extends AbstractModel
{
    /**
     * @var string Configuration group type. Options are as follows:<li>l7_acceleration: layer-7 acceleration configuration group;</li><li>edge_functions: edge function configuration group.</li><li>web_security: web protection configuration group.</li>
     */
    public $ConfigGroupType;

    /**
     * @var string Working mode. options are as follows: <li>immediate_effect: immediate effect mode;</li><li>version_control: version management mode.</li>.
     */
    public $WorkMode;

    /**
     * @param string $ConfigGroupType Configuration group type. Options are as follows:<li>l7_acceleration: layer-7 acceleration configuration group;</li><li>edge_functions: edge function configuration group.</li><li>web_security: web protection configuration group.</li>
     * @param string $WorkMode Working mode. options are as follows: <li>immediate_effect: immediate effect mode;</li><li>version_control: version management mode.</li>.
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
        if (array_key_exists("ConfigGroupType",$param) and $param["ConfigGroupType"] !== null) {
            $this->ConfigGroupType = $param["ConfigGroupType"];
        }

        if (array_key_exists("WorkMode",$param) and $param["WorkMode"] !== null) {
            $this->WorkMode = $param["WorkMode"];
        }
    }
}
