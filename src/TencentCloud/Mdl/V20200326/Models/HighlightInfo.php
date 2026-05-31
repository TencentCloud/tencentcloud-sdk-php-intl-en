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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Highlight configuration.
 *
 * @method integer getHighlightEnabled() Obtain Whether to enable input recognition  0: disabled  1: enabled  Default value: 0.
 * @method void setHighlightEnabled(integer $HighlightEnabled) Set Whether to enable input recognition  0: disabled  1: enabled  Default value: 0.
 * @method string getType() Obtain Products to save results. Option: COS.
Currently supports Tencent Cloud COS only. AWS S3 integration will be supported later. Default is COS.
 * @method void setType(string $Type) Set Products to save results. Option: COS.
Currently supports Tencent Cloud COS only. AWS S3 integration will be supported later. Default is COS.
 * @method string getRegion() Obtain Valid when Type is COS. Region of COS storage.
 * @method void setRegion(string $Region) Set Valid when Type is COS. Region of COS storage.
 * @method string getBucket() Obtain Valid when Type is COS. Bucket name of COS storage.
 * @method void setBucket(string $Bucket) Set Valid when Type is COS. Bucket name of COS storage.
 * @method string getPath() Obtain Valid when Type is COS. Path of COS storage.
 * @method void setPath(string $Path) Set Valid when Type is COS. Path of COS storage.
 * @method string getFilename() Obtain Valid when Type is COS. Name of the stored file in COS.
 * @method void setFilename(string $Filename) Set Valid when Type is COS. Name of the stored file in COS.
 * @method string getTimestampFormat() Obtain Valid when Type is COS. The file extension of COS storage is automatically generated in time format. Available values: unix, utc.
unix is a second-level timestamp. utc 0 represents the year, month, day.
 * @method void setTimestampFormat(string $TimestampFormat) Set Valid when Type is COS. The file extension of COS storage is automatically generated in time format. Available values: unix, utc.
unix is a second-level timestamp. utc 0 represents the year, month, day.
 * @method array getAudioSelectorNames() Obtain Audio selector list, selectable, can be left blank. By default, an audio is used as the output of the recognition result.
 * @method void setAudioSelectorNames(array $AudioSelectorNames) Set Audio selector list, selectable, can be left blank. By default, an audio is used as the output of the recognition result.
 */
class HighlightInfo extends AbstractModel
{
    /**
     * @var integer Whether to enable input recognition  0: disabled  1: enabled  Default value: 0.
     */
    public $HighlightEnabled;

    /**
     * @var string Products to save results. Option: COS.
Currently supports Tencent Cloud COS only. AWS S3 integration will be supported later. Default is COS.
     */
    public $Type;

    /**
     * @var string Valid when Type is COS. Region of COS storage.
     */
    public $Region;

    /**
     * @var string Valid when Type is COS. Bucket name of COS storage.
     */
    public $Bucket;

    /**
     * @var string Valid when Type is COS. Path of COS storage.
     */
    public $Path;

    /**
     * @var string Valid when Type is COS. Name of the stored file in COS.
     */
    public $Filename;

    /**
     * @var string Valid when Type is COS. The file extension of COS storage is automatically generated in time format. Available values: unix, utc.
unix is a second-level timestamp. utc 0 represents the year, month, day.
     */
    public $TimestampFormat;

    /**
     * @var array Audio selector list, selectable, can be left blank. By default, an audio is used as the output of the recognition result.
     */
    public $AudioSelectorNames;

    /**
     * @param integer $HighlightEnabled Whether to enable input recognition  0: disabled  1: enabled  Default value: 0.
     * @param string $Type Products to save results. Option: COS.
Currently supports Tencent Cloud COS only. AWS S3 integration will be supported later. Default is COS.
     * @param string $Region Valid when Type is COS. Region of COS storage.
     * @param string $Bucket Valid when Type is COS. Bucket name of COS storage.
     * @param string $Path Valid when Type is COS. Path of COS storage.
     * @param string $Filename Valid when Type is COS. Name of the stored file in COS.
     * @param string $TimestampFormat Valid when Type is COS. The file extension of COS storage is automatically generated in time format. Available values: unix, utc.
unix is a second-level timestamp. utc 0 represents the year, month, day.
     * @param array $AudioSelectorNames Audio selector list, selectable, can be left blank. By default, an audio is used as the output of the recognition result.
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
        if (array_key_exists("HighlightEnabled",$param) and $param["HighlightEnabled"] !== null) {
            $this->HighlightEnabled = $param["HighlightEnabled"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("TimestampFormat",$param) and $param["TimestampFormat"] !== null) {
            $this->TimestampFormat = $param["TimestampFormat"];
        }

        if (array_key_exists("AudioSelectorNames",$param) and $param["AudioSelectorNames"] !== null) {
            $this->AudioSelectorNames = $param["AudioSelectorNames"];
        }
    }
}
