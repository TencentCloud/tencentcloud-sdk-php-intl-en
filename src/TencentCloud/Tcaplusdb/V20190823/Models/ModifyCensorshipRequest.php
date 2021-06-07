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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCensorship request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCensorship() Obtain Whether to enable the operation approval feature for this cluster. Valid values: `0` (disable), `1` (enable)
 * @method void setCensorship(integer $Censorship) Set Whether to enable the operation approval feature for this cluster. Valid values: `0` (disable), `1` (enable)
 * @method array getUins() Obtain Approver UIN list
 * @method void setUins(array $Uins) Set Approver UIN list
 */
class ModifyCensorshipRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Whether to enable the operation approval feature for this cluster. Valid values: `0` (disable), `1` (enable)
     */
    public $Censorship;

    /**
     * @var array Approver UIN list
     */
    public $Uins;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Censorship Whether to enable the operation approval feature for this cluster. Valid values: `0` (disable), `1` (enable)
     * @param array $Uins Approver UIN list
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Censorship",$param) and $param["Censorship"] !== null) {
            $this->Censorship = $param["Censorship"];
        }

        if (array_key_exists("Uins",$param) and $param["Uins"] !== null) {
            $this->Uins = $param["Uins"];
        }
    }
}
