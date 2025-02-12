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
 * 
 *
 * @method string getID() Obtain SSAI configuration ID, globally unique identifier
 * @method void setID(string $ID) Set SSAI configuration ID, globally unique identifier
 * @method string getName() Obtain Configuration name
 * @method void setName(string $Name) Set Configuration name
 * @method string getContentSource() Obtain Content source stream prefix
 * @method void setContentSource(string $ContentSource) Set Content source stream prefix
 * @method string getPlaybackPrefix() Obtain Generated playback address prefix
 * @method void setPlaybackPrefix(string $PlaybackPrefix) Set Generated playback address prefix
 * @method SSAIConf getSSAIInfo() Obtain SSAI configuration info
 * @method void setSSAIInfo(SSAIConf $SSAIInfo) Set SSAI configuration info
 * @method string getRegion() Obtain Region info
 * @method void setRegion(string $Region) Set Region info
 */
class SSAIChannelInfo extends AbstractModel
{
    /**
     * @var string SSAI configuration ID, globally unique identifier
     */
    public $ID;

    /**
     * @var string Configuration name
     */
    public $Name;

    /**
     * @var string Content source stream prefix
     */
    public $ContentSource;

    /**
     * @var string Generated playback address prefix
     */
    public $PlaybackPrefix;

    /**
     * @var SSAIConf SSAI configuration info
     */
    public $SSAIInfo;

    /**
     * @var string Region info
     */
    public $Region;

    /**
     * @param string $ID SSAI configuration ID, globally unique identifier
     * @param string $Name Configuration name
     * @param string $ContentSource Content source stream prefix
     * @param string $PlaybackPrefix Generated playback address prefix
     * @param SSAIConf $SSAIInfo SSAI configuration info
     * @param string $Region Region info
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContentSource",$param) and $param["ContentSource"] !== null) {
            $this->ContentSource = $param["ContentSource"];
        }

        if (array_key_exists("PlaybackPrefix",$param) and $param["PlaybackPrefix"] !== null) {
            $this->PlaybackPrefix = $param["PlaybackPrefix"];
        }

        if (array_key_exists("SSAIInfo",$param) and $param["SSAIInfo"] !== null) {
            $this->SSAIInfo = new SSAIConf();
            $this->SSAIInfo->deserialize($param["SSAIInfo"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
