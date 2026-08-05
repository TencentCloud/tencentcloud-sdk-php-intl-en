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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image processing result information.
 *
 * @method string getPath() Obtain <p>Path of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set <p>Path of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method string getContent() Obtain <p>Processing result of the image-to-text task.</p>
 * @method void setContent(string $Content) Set <p>Processing result of the image-to-text task.</p>
 * @method string getFileId() Obtain <p>VOD Standard Edition FileId</p>
 * @method void setFileId(string $FileId) Set <p>VOD Standard Edition FileId</p>
 */
class ImageProcessTaskOutput extends AbstractModel
{
    /**
     * @var string <p>Path of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var TaskOutputStorage <p>Storage location of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string <p>Processing result of the image-to-text task.</p>
     */
    public $Content;

    /**
     * @var string <p>VOD Standard Edition FileId</p>
     */
    public $FileId;

    /**
     * @param string $Path <p>Path of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param TaskOutputStorage $OutputStorage <p>Storage location of the output file.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param string $Content <p>Processing result of the image-to-text task.</p>
     * @param string $FileId <p>VOD Standard Edition FileId</p>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
