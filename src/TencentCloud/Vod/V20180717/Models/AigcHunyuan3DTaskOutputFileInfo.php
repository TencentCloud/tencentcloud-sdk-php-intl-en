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
 * Information of the output file of an AIGC Hunyuan 3D task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li> Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li> Default value: Temporary</p>
 * @method string getExpireTime() Obtain <p>Expiry date of the output file. The file will be deleted after this time. The default is permanent with no expiration. The format follows the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiry date of the output file. The file will be deleted after this time. The default is permanent with no expiration. The format follows the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getFileType() Obtain <p>File type, for example, OBJ, GLB, or FBX.</p>
 * @method void setFileType(string $FileType) Set <p>File type, for example, OBJ, GLB, or FBX.</p>
 * @method string getFileUrl() Obtain <p>Output file address.</p>
 * @method void setFileUrl(string $FileUrl) Set <p>Output file address.</p>
 * @method string getPreviewFileUrl() Obtain <p>Output file preview address.</p><p>Empty if no file preview address is available.</p>
 * @method void setPreviewFileUrl(string $PreviewFileUrl) Set <p>Output file preview address.</p><p>Empty if no file preview address is available.</p>
 */
class AigcHunyuan3DTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string <p>Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li> Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Expiry date of the output file. The file will be deleted after this time. The default is permanent with no expiration. The format follows the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>File type, for example, OBJ, GLB, or FBX.</p>
     */
    public $FileType;

    /**
     * @var string <p>Output file address.</p>
     */
    public $FileUrl;

    /**
     * @var string <p>Output file preview address.</p><p>Empty if no file preview address is available.</p>
     */
    public $PreviewFileUrl;

    /**
     * @param string $StorageMode <p>Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li> Default value: Temporary</p>
     * @param string $ExpireTime <p>Expiry date of the output file. The file will be deleted after this time. The default is permanent with no expiration. The format follows the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $FileType <p>File type, for example, OBJ, GLB, or FBX.</p>
     * @param string $FileUrl <p>Output file address.</p>
     * @param string $PreviewFileUrl <p>Output file preview address.</p><p>Empty if no file preview address is available.</p>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("PreviewFileUrl",$param) and $param["PreviewFileUrl"] !== null) {
            $this->PreviewFileUrl = $param["PreviewFileUrl"];
        }
    }
}
