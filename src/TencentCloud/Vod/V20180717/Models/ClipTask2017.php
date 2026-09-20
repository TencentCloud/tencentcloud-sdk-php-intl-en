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
 * Video editing task information. This structure is only used for tasks initiated by the 2017 version [video editing](https://www.tencentcloud.com/document/product/266/10156?from_cn_redirect=1) API.
 *
 * @method string getTaskId() Obtain Video clipping task ID.
 * @method void setTaskId(string $TaskId) Set Video clipping task ID.
 * @method string getSrcFileId() Obtain Video editing task source file ID.
 * @method void setSrcFileId(string $SrcFileId) Set Video editing task source file ID.
 * @method ClipFileInfo2017 getFileInfo() Obtain File information of the video editing output.
 * @method void setFileInfo(ClipFileInfo2017 $FileInfo) Set File information of the video editing output.
 */
class ClipTask2017 extends AbstractModel
{
    /**
     * @var string Video clipping task ID.
     */
    public $TaskId;

    /**
     * @var string Video editing task source file ID.
     */
    public $SrcFileId;

    /**
     * @var ClipFileInfo2017 File information of the video editing output.
     */
    public $FileInfo;

    /**
     * @param string $TaskId Video clipping task ID.
     * @param string $SrcFileId Video editing task source file ID.
     * @param ClipFileInfo2017 $FileInfo File information of the video editing output.
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
