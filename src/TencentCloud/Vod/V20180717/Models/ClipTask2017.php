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
 * The details of a video editing task. This parameter is only valid for tasks initiated by the v2017 video editing API.
 *
 * @method string getTaskId() Obtain Video clipping task ID.
 * @method void setTaskId(string $TaskId) Set Video clipping task ID.
 * @method string getSrcFileId() Obtain ID of source file for video clipping task.
 * @method void setSrcFileId(string $SrcFileId) Set ID of source file for video clipping task.
 * @method ClipFileInfo2017 getFileInfo() Obtain Information of file output by video clipping.
 * @method void setFileInfo(ClipFileInfo2017 $FileInfo) Set Information of file output by video clipping.
 */
class ClipTask2017 extends AbstractModel
{
    /**
     * @var string Video clipping task ID.
     */
    public $TaskId;

    /**
     * @var string ID of source file for video clipping task.
     */
    public $SrcFileId;

    /**
     * @var ClipFileInfo2017 Information of file output by video clipping.
     */
    public $FileInfo;

    /**
     * @param string $TaskId Video clipping task ID.
     * @param string $SrcFileId ID of source file for video clipping task.
     * @param ClipFileInfo2017 $FileInfo Information of file output by video clipping.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SrcFileId",$param) and $param["SrcFileId"] !== null) {
            $this->SrcFileId = $param["SrcFileId"];
        }

        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new ClipFileInfo2017();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }
    }
}
