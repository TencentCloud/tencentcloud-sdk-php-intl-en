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
 * Security report article details
 *
 * @method string getTitle() Obtain Article name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTitle(string $Title) Set Article name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGotoType() Obtain Redirection location: 0: no redirection; 1: virus scanning; 2: vulnerability scan; 3: security baseline
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGotoType(integer $GotoType) Set Redirection location: 0: no redirection; 1: virus scanning; 2: vulnerability scan; 3: security baseline
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubtitle() Obtain Subtitle
 * @method void setSubtitle(string $Subtitle) Set Subtitle
 * @method string getCreateTime() Obtain Release time
 * @method void setCreateTime(string $CreateTime) Set Release time
 * @method string getContent() Obtain Rich text content information
 * @method void setContent(string $Content) Set Rich text content information
 * @method integer getId() Obtain Article unique ID
 * @method void setId(integer $Id) Set Article unique ID
 * @method integer getType() Obtain Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
 * @method void setType(integer $Type) Set Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
 */
class BroadcastInfo extends AbstractModel
{
    /**
     * @var string Article name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Title;

    /**
     * @var integer Redirection location: 0: no redirection; 1: virus scanning; 2: vulnerability scan; 3: security baseline
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GotoType;

    /**
     * @var string Subtitle
     */
    public $Subtitle;

    /**
     * @var string Release time
     */
    public $CreateTime;

    /**
     * @var string Rich text content information
     */
    public $Content;

    /**
     * @var integer Article unique ID
     */
    public $Id;

    /**
     * @var integer Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
     */
    public $Type;

    /**
     * @param string $Title Article name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GotoType Redirection location: 0: no redirection; 1: virus scanning; 2: vulnerability scan; 3: security baseline
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Subtitle Subtitle
     * @param string $CreateTime Release time
     * @param string $Content Rich text content information
     * @param integer $Id Article unique ID
     * @param integer $Type Type: 0: emergency notification; 1: feature update; 2: industry honor; 3: version release
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

        if (array_key_exists("GotoType",$param) and $param["GotoType"] !== null) {
            $this->GotoType = $param["GotoType"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = $param["Subtitle"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
