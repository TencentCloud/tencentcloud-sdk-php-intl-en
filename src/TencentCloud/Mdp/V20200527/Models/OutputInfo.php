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
 * Channel linear assembly output information.
 *
 * @method string getType() Obtain HLS DASH.
 * @method void setType(string $Type) Set HLS DASH.
 * @method string getGroupName() Obtain The output group name can be associated with the source group name.
 * @method void setGroupName(string $GroupName) Set The output group name can be associated with the source group name.
 * @method string getManifestName() Obtain The file name output by the channel program after scheduling.
 * @method void setManifestName(string $ManifestName) Set The file name output by the channel program after scheduling.
 * @method ManifestInfo getManifestConf() Obtain The manifest info, used when Type is HLS.
 * @method void setManifestConf(ManifestInfo $ManifestConf) Set The manifest info, used when Type is HLS.
 * @method string getPlaybackURL() Obtain Playback address.
 * @method void setPlaybackURL(string $PlaybackURL) Set Playback address.
 * @method DashManifestInfo getDashManifestConf() Obtain The manifest info, used when Type is DASH.
 * @method void setDashManifestConf(DashManifestInfo $DashManifestConf) Set The manifest info, used when Type is DASH.
 */
class OutputInfo extends AbstractModel
{
    /**
     * @var string HLS DASH.
     */
    public $Type;

    /**
     * @var string The output group name can be associated with the source group name.
     */
    public $GroupName;

    /**
     * @var string The file name output by the channel program after scheduling.
     */
    public $ManifestName;

    /**
     * @var ManifestInfo The manifest info, used when Type is HLS.
     */
    public $ManifestConf;

    /**
     * @var string Playback address.
     */
    public $PlaybackURL;

    /**
     * @var DashManifestInfo The manifest info, used when Type is DASH.
     */
    public $DashManifestConf;

    /**
     * @param string $Type HLS DASH.
     * @param string $GroupName The output group name can be associated with the source group name.
     * @param string $ManifestName The file name output by the channel program after scheduling.
     * @param ManifestInfo $ManifestConf The manifest info, used when Type is HLS.
     * @param string $PlaybackURL Playback address.
     * @param DashManifestInfo $DashManifestConf The manifest info, used when Type is DASH.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ManifestName",$param) and $param["ManifestName"] !== null) {
            $this->ManifestName = $param["ManifestName"];
        }

        if (array_key_exists("ManifestConf",$param) and $param["ManifestConf"] !== null) {
            $this->ManifestConf = new ManifestInfo();
            $this->ManifestConf->deserialize($param["ManifestConf"]);
        }

        if (array_key_exists("PlaybackURL",$param) and $param["PlaybackURL"] !== null) {
            $this->PlaybackURL = $param["PlaybackURL"];
        }

        if (array_key_exists("DashManifestConf",$param) and $param["DashManifestConf"] !== null) {
            $this->DashManifestConf = new DashManifestInfo();
            $this->DashManifestConf->deserialize($param["DashManifestConf"]);
        }
    }
}
