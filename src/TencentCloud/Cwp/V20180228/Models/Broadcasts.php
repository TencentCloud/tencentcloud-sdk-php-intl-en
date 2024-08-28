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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security report list
 *
 * @method string getTitle() Obtain Article name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTitle(string $Title) Set Article name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubtitle() Obtain Subtitle
 * @method void setSubtitle(string $Subtitle) Set Subtitle
 * @method string getCreateTime() Obtain Release time
 * @method void setCreateTime(string $CreateTime) Set Release time
 * @method integer getId() Obtain Article unique ID
 * @method void setId(integer $Id) Set Article unique ID
 * @method integer getLevel() Obtain Severity level. 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
 * @method void setLevel(integer $Level) Set Severity level. 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
 */
class Broadcasts extends AbstractModel
{
    /**
     * @var string Article name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Title;

    /**
     * @var integer Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Subtitle
     */
    public $Subtitle;

    /**
     * @var string Release time
     */
    public $CreateTime;

    /**
     * @var integer Article unique ID
     */
    public $Id;

    /**
     * @var integer Severity level. 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
     */
    public $Level;

    /**
     * @param string $Title Article name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Type Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Subtitle Subtitle
     * @param string $CreateTime Release time
     * @param integer $Id Article unique ID
     * @param integer $Level Severity level. 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = $param["Subtitle"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
