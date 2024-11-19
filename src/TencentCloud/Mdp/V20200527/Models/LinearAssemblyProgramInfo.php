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
 * Channel linear assembly program information.
 *
 * @method string getName() Obtain Channel linear assembly program information.
 * @method void setName(string $Name) Set Channel linear assembly program information.
 * @method string getSourceType() Obtain The type of the arrangement target source, divided into live broadcast and on-demand.
 * @method void setSourceType(string $SourceType) Set The type of the arrangement target source, divided into live broadcast and on-demand.
 * @method string getSourceLocationId() Obtain The associated source location id.
 * @method void setSourceLocationId(string $SourceLocationId) Set The associated source location id.
 * @method string getSourceId() Obtain SourceId, uniquely identifies a source.
 * @method void setSourceId(string $SourceId) Set SourceId, uniquely identifies a source.
 * @method string getSourceName() Obtain The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
 * @method void setSourceName(string $SourceName) Set The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
 * @method string getAttachedChannel() Obtain The bound channel.
 * @method void setAttachedChannel(string $AttachedChannel) Set The bound channel.
 * @method PlaybackInfo getPlaybackConf() Obtain Play configuration.
 * @method void setPlaybackConf(PlaybackInfo $PlaybackConf) Set Play configuration.
 * @method array getAdBreaks() Obtain AdBreaks.
 * @method void setAdBreaks(array $AdBreaks) Set AdBreaks.
 * @method string getId() Obtain ID.
 * @method void setId(string $Id) Set ID.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getSourceLocationName() Obtain SourceLocation name.
 * @method void setSourceLocationName(string $SourceLocationName) Set SourceLocation name.
 */
class LinearAssemblyProgramInfo extends AbstractModel
{
    /**
     * @var string Channel linear assembly program information.
     */
    public $Name;

    /**
     * @var string The type of the arrangement target source, divided into live broadcast and on-demand.
     */
    public $SourceType;

    /**
     * @var string The associated source location id.
     */
    public $SourceLocationId;

    /**
     * @var string SourceId, uniquely identifies a source.
     */
    public $SourceId;

    /**
     * @var string The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
     */
    public $SourceName;

    /**
     * @var string The bound channel.
     */
    public $AttachedChannel;

    /**
     * @var PlaybackInfo Play configuration.
     */
    public $PlaybackConf;

    /**
     * @var array AdBreaks.
     */
    public $AdBreaks;

    /**
     * @var string ID.
     */
    public $Id;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string SourceLocation name.
     */
    public $SourceLocationName;

    /**
     * @param string $Name Channel linear assembly program information.
     * @param string $SourceType The type of the arrangement target source, divided into live broadcast and on-demand.
     * @param string $SourceLocationId The associated source location id.
     * @param string $SourceId SourceId, uniquely identifies a source.
     * @param string $SourceName The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
     * @param string $AttachedChannel The bound channel.
     * @param PlaybackInfo $PlaybackConf Play configuration.
     * @param array $AdBreaks AdBreaks.
     * @param string $Id ID.
     * @param string $Region Region.
     * @param string $SourceLocationName SourceLocation name.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("AttachedChannel",$param) and $param["AttachedChannel"] !== null) {
            $this->AttachedChannel = $param["AttachedChannel"];
        }

        if (array_key_exists("PlaybackConf",$param) and $param["PlaybackConf"] !== null) {
            $this->PlaybackConf = new PlaybackInfo();
            $this->PlaybackConf->deserialize($param["PlaybackConf"]);
        }

        if (array_key_exists("AdBreaks",$param) and $param["AdBreaks"] !== null) {
            $this->AdBreaks = [];
            foreach ($param["AdBreaks"] as $key => $value){
                $obj = new AdBreakInfo();
                $obj->deserialize($value);
                array_push($this->AdBreaks, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceLocationName",$param) and $param["SourceLocationName"] !== null) {
            $this->SourceLocationName = $param["SourceLocationName"];
        }
    }
}
