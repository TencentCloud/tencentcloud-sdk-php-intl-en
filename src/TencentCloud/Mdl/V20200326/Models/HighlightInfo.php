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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection configuration.
 *
 * @method integer getHighlightEnabled() Obtain Whether to enable input recognition 0: Disable 1 Enable Default value 0 Disable.
 * @method void setHighlightEnabled(integer $HighlightEnabled) Set Whether to enable input recognition 0: Disable 1 Enable Default value 0 Disable.
 * @method string getType() Obtain The product where the results are saved, optional: COS. Currently, only Tencent Cloud COS is supported. In the future, it will be connected to AWS S3 and COS will be used by default.
 * @method void setType(string $Type) Set The product where the results are saved, optional: COS. Currently, only Tencent Cloud COS is supported. In the future, it will be connected to AWS S3 and COS will be used by default.
 * @method string getRegion() Obtain Valid when Type is COS, the region where COS is stored.
 * @method void setRegion(string $Region) Set Valid when Type is COS, the region where COS is stored.
 * @method string getBucket() Obtain Valid when Type is COS, the bucket name stored in COS.
 * @method void setBucket(string $Bucket) Set Valid when Type is COS, the bucket name stored in COS.
 * @method string getPath() Obtain Valid when Type is COS, the path where cos is stored.
 * @method void setPath(string $Path) Set Valid when Type is COS, the path where cos is stored.
 * @method string getFilename() Obtain Valid when Type is COS, the file name stored in cos.
 * @method void setFilename(string $Filename) Set Valid when Type is COS, the file name stored in cos.
 * @method string getTimestampFormat() Obtain Valid when Type is COS, the file name suffix stored in COS is automatically generated in the time format, optional values: unix, utc. Unix is the second-level timestamp and UTC is the year, month and day represented by the zero time zone.
 * @method void setTimestampFormat(string $TimestampFormat) Set Valid when Type is COS, the file name suffix stored in COS is automatically generated in the time format, optional values: unix, utc. Unix is the second-level timestamp and UTC is the year, month and day represented by the zero time zone.
 * @method array getAudioSelectorNames() Obtain Audio selector list is optional and can be empty. If not filled in, an audio will be used as the output of the recognition result by default.
 * @method void setAudioSelectorNames(array $AudioSelectorNames) Set Audio selector list is optional and can be empty. If not filled in, an audio will be used as the output of the recognition result by default.
 */
class HighlightInfo extends AbstractModel
{
    /**
     * @var integer Whether to enable input recognition 0: Disable 1 Enable Default value 0 Disable.
     */
    public $HighlightEnabled;

    /**
     * @var string The product where the results are saved, optional: COS. Currently, only Tencent Cloud COS is supported. In the future, it will be connected to AWS S3 and COS will be used by default.
     */
    public $Type;

    /**
     * @var string Valid when Type is COS, the region where COS is stored.
     */
    public $Region;

    /**
     * @var string Valid when Type is COS, the bucket name stored in COS.
     */
    public $Bucket;

    /**
     * @var string Valid when Type is COS, the path where cos is stored.
     */
    public $Path;

    /**
     * @var string Valid when Type is COS, the file name stored in cos.
     */
    public $Filename;

    /**
     * @var string Valid when Type is COS, the file name suffix stored in COS is automatically generated in the time format, optional values: unix, utc. Unix is the second-level timestamp and UTC is the year, month and day represented by the zero time zone.
     */
    public $TimestampFormat;

    /**
     * @var array Audio selector list is optional and can be empty. If not filled in, an audio will be used as the output of the recognition result by default.
     */
    public $AudioSelectorNames;

    /**
     * @param integer $HighlightEnabled Whether to enable input recognition 0: Disable 1 Enable Default value 0 Disable.
     * @param string $Type The product where the results are saved, optional: COS. Currently, only Tencent Cloud COS is supported. In the future, it will be connected to AWS S3 and COS will be used by default.
     * @param string $Region Valid when Type is COS, the region where COS is stored.
     * @param string $Bucket Valid when Type is COS, the bucket name stored in COS.
     * @param string $Path Valid when Type is COS, the path where cos is stored.
     * @param string $Filename Valid when Type is COS, the file name stored in cos.
     * @param string $TimestampFormat Valid when Type is COS, the file name suffix stored in COS is automatically generated in the time format, optional values: unix, utc. Unix is the second-level timestamp and UTC is the year, month and day represented by the zero time zone.
     * @param array $AudioSelectorNames Audio selector list is optional and can be empty. If not filled in, an audio will be used as the output of the recognition result by default.
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
