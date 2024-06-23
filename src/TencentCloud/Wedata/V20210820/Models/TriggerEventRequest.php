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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerEvent request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getName() Obtain Case Name
 * @method void setName(string $Name) Set Case Name
 * @method string getDimension() Obtain Time format: If the trigger time is selected as June 21, 2022, it should be set to 20220621
 * @method void setDimension(string $Dimension) Set Time format: If the trigger time is selected as June 21, 2022, it should be set to 20220621
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class TriggerEventRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Case Name
     */
    public $Name;

    /**
     * @var string Time format: If the trigger time is selected as June 21, 2022, it should be set to 20220621
     */
    public $Dimension;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param string $ProjectId Project ID
     * @param string $Name Case Name
     * @param string $Dimension Time format: If the trigger time is selected as June 21, 2022, it should be set to 20220621
     * @param string $Description Description
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
