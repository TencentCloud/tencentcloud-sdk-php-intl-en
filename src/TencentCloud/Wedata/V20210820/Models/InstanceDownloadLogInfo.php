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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Download Log Details
 *
 * @method string getFileName() Obtain File NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileName(string $FileName) Set File NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileUrl() Obtain File URL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileUrl(string $FileUrl) Set File URL
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceDownloadLogInfo extends AbstractModel
{
    /**
     * @var string File NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileName;

    /**
     * @var string File URL
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileUrl;

    /**
     * @param string $FileName File NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileUrl File URL
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
