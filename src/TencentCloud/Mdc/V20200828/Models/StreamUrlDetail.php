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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of the complete URL information
 *
 * @method string getLabel() Obtain Describes carrier information and other details.
 * @method void setLabel(string $Label) Set Describes carrier information and other details.
 * @method string getUrl() Obtain URL 
 * @method void setUrl(string $Url) Set URL 
 * @method string getType() Obtain Playback: stream playback address;
RelayDestination: relay destination address; SourceCaptureUrl: source pull stream address; IngestEndpoint: streaming address
 * @method void setType(string $Type) Set Playback: stream playback address;
RelayDestination: relay destination address; SourceCaptureUrl: source pull stream address; IngestEndpoint: streaming address
 */
class StreamUrlDetail extends AbstractModel
{
    /**
     * @var string Describes carrier information and other details.
     */
    public $Label;

    /**
     * @var string URL 
     */
    public $Url;

    /**
     * @var string Playback: stream playback address;
RelayDestination: relay destination address; SourceCaptureUrl: source pull stream address; IngestEndpoint: streaming address
     */
    public $Type;

    /**
     * @param string $Label Describes carrier information and other details.
     * @param string $Url URL 
     * @param string $Type Playback: stream playback address;
RelayDestination: relay destination address; SourceCaptureUrl: source pull stream address; IngestEndpoint: streaming address
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
