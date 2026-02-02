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
 * @method string getPath() Obtain Path of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPath(string $Path) Set Path of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getContent() Obtain Processing result of the image-to-text task.
 * @method void setContent(string $Content) Set Processing result of the image-to-text task.
 */
class ImageProcessTaskOutput extends AbstractModel
{
    /**
     * @var string Path of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Path;

    /**
     * @var TaskOutputStorage Storage location of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Processing result of the image-to-text task.
     */
    public $Content;

    /**
     * @param string $Path Path of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TaskOutputStorage $OutputStorage Storage location of the output file.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Content Processing result of the image-to-text task.
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
    }
}
