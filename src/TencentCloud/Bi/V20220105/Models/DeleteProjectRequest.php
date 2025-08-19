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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProject request structure.
 *
 * @method integer getId() Obtain Project ID.
 * @method void setId(integer $Id) Set Project ID.
 * @method string getSeed() Obtain Random number.
 * @method void setSeed(string $Seed) Set Random number.
 * @method integer getDefaultPanelType() Obtain Default dashboard.
 * @method void setDefaultPanelType(integer $DefaultPanelType) Set Default dashboard.
 */
class DeleteProjectRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $Id;

    /**
     * @var string Random number.
     */
    public $Seed;

    /**
     * @var integer Default dashboard.
     */
    public $DefaultPanelType;

    /**
     * @param integer $Id Project ID.
     * @param string $Seed Random number.
     * @param integer $DefaultPanelType Default dashboard.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }
    }
}
