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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input of video editing task.
 *
 * @method string getInputType() Obtain Input video source type. Valid values: File, Stream.
 * @method void setInputType(string $InputType) Set Input video source type. Valid values: File, Stream.
 * @method array getFileInfoSet() Obtain Information of input video file. This field has a value only when `InputType` is `File`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileInfoSet(array $FileInfoSet) Set Information of input video file. This field has a value only when `InputType` is `File`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getStreamInfoSet() Obtain Input stream information. This field has a value only when `InputType` is `Stream`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStreamInfoSet(array $StreamInfoSet) Set Input stream information. This field has a value only when `InputType` is `Stream`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class EditMediaTaskInput extends AbstractModel
{
    /**
     * @var string Input video source type. Valid values: File, Stream.
     */
    public $InputType;

    /**
     * @var array Information of input video file. This field has a value only when `InputType` is `File`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileInfoSet;

    /**
     * @var array Input stream information. This field has a value only when `InputType` is `Stream`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StreamInfoSet;

    /**
     * @param string $InputType Input video source type. Valid values: File, Stream.
     * @param array $FileInfoSet Information of input video file. This field has a value only when `InputType` is `File`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $StreamInfoSet Input stream information. This field has a value only when `InputType` is `Stream`.
Note: this field may return null, indicating that no valid values can be obtained.
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
