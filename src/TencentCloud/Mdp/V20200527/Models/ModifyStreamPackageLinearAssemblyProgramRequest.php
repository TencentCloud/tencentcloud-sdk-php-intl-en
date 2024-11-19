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
 * ModifyStreamPackageLinearAssemblyProgram request structure.
 *
 * @method string getId() Obtain Program ID.
 * @method void setId(string $Id) Set Program ID.
 * @method string getName() Obtain Modified name.
 * @method void setName(string $Name) Set Modified name.
 * @method string getSourceType() Obtain The type of the arrangement target source, divided into live broadcast and on-demand.
 * @method void setSourceType(string $SourceType) Set The type of the arrangement target source, divided into live broadcast and on-demand.
 * @method string getSourceLocationId() Obtain The associated source location.
 * @method void setSourceLocationId(string $SourceLocationId) Set The associated source location.
 * @method string getSourceName() Obtain The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
 * @method void setSourceName(string $SourceName) Set The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
 * @method PlaybackInfoReq getPlaybackConf() Obtain PlaybackConf.
 * @method void setPlaybackConf(PlaybackInfoReq $PlaybackConf) Set PlaybackConf.
 * @method array getAdBreaks() Obtain AdBreaks.
 * @method void setAdBreaks(array $AdBreaks) Set AdBreaks.
 */
class ModifyStreamPackageLinearAssemblyProgramRequest extends AbstractModel
{
    /**
     * @var string Program ID.
     */
    public $Id;

    /**
     * @var string Modified name.
     */
    public $Name;

    /**
     * @var string The type of the arrangement target source, divided into live broadcast and on-demand.
     */
    public $SourceType;

    /**
     * @var string The associated source location.
     */
    public $SourceLocationId;

    /**
     * @var string The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
     */
    public $SourceName;

    /**
     * @var PlaybackInfoReq PlaybackConf.
     */
    public $PlaybackConf;

    /**
     * @var array AdBreaks.
     */
    public $AdBreaks;

    /**
     * @param string $Id Program ID.
     * @param string $Name Modified name.
     * @param string $SourceType The type of the arrangement target source, divided into live broadcast and on-demand.
     * @param string $SourceLocationId The associated source location.
     * @param string $SourceName The associated live broadcast or on-demand broadcast, source name, and location are globally unique.
     * @param PlaybackInfoReq $PlaybackConf PlaybackConf.
     * @param array $AdBreaks AdBreaks.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("PlaybackConf",$param) and $param["PlaybackConf"] !== null) {
            $this->PlaybackConf = new PlaybackInfoReq();
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
    }
}
