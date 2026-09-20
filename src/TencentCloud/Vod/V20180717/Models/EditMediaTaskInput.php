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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input of the video editing task.
 *
 * @method string getInputType() Obtain Source type of the input video. Valid values: File and Stream.
 * @method void setInputType(string $InputType) Set Source type of the input video. Valid values: File and Stream.
 * @method array getFileInfoSet() Obtain Input video file information. This field has a value when InputType is File.
 * @method void setFileInfoSet(array $FileInfoSet) Set Input video file information. This field has a value when InputType is File.
 * @method array getStreamInfoSet() Obtain Input stream information. This field has a value when InputType is Stream.
 * @method void setStreamInfoSet(array $StreamInfoSet) Set Input stream information. This field has a value when InputType is Stream.
 */
class EditMediaTaskInput extends AbstractModel
{
    /**
     * @var string Source type of the input video. Valid values: File and Stream.
     */
    public $InputType;

    /**
     * @var array Input video file information. This field has a value when InputType is File.
     */
    public $FileInfoSet;

    /**
     * @var array Input stream information. This field has a value when InputType is Stream.
     */
    public $StreamInfoSet;

    /**
     * @param string $InputType Source type of the input video. Valid values: File and Stream.
     * @param array $FileInfoSet Input video file information. This field has a value when InputType is File.
     * @param array $StreamInfoSet Input stream information. This field has a value when InputType is Stream.
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("FileInfoSet",$param) and $param["FileInfoSet"] !== null) {
            $this->FileInfoSet = [];
            foreach ($param["FileInfoSet"] as $key => $value){
                $obj = new EditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfoSet, $obj);
            }
        }

        if (array_key_exists("StreamInfoSet",$param) and $param["StreamInfoSet"] !== null) {
            $this->StreamInfoSet = [];
            foreach ($param["StreamInfoSet"] as $key => $value){
                $obj = new EditMediaStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamInfoSet, $obj);
            }
        }
    }
}
