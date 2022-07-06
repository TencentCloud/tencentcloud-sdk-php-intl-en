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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup download information
 *
 * @method string getFileName() Obtain Backup file name
 * @method void setFileName(string $FileName) Set Backup file name
 * @method integer getFileSize() Obtain Backup file size in bytes. If the parameter value is `0`, the backup file size is unknown.
 * @method void setFileSize(integer $FileSize) Set Backup file size in bytes. If the parameter value is `0`, the backup file size is unknown.
 * @method string getDownloadUrl() Obtain Address (valid for six hours) used to download the backup file over the public network
 * @method void setDownloadUrl(string $DownloadUrl) Set Address (valid for six hours) used to download the backup file over the public network
 * @method string getInnerDownloadUrl() Obtain Address (valid for six hours) used to download the backup file over the private network
 * @method void setInnerDownloadUrl(string $InnerDownloadUrl) Set Address (valid for six hours) used to download the backup file over the private network
 */
class BackupDownloadInfo extends AbstractModel
{
    /**
     * @var string Backup file name
     */
    public $FileName;

    /**
     * @var integer Backup file size in bytes. If the parameter value is `0`, the backup file size is unknown.
     */
    public $FileSize;

    /**
     * @var string Address (valid for six hours) used to download the backup file over the public network
     */
    public $DownloadUrl;

    /**
     * @var string Address (valid for six hours) used to download the backup file over the private network
     */
    public $InnerDownloadUrl;

    /**
     * @param string $FileName Backup file name
     * @param integer $FileSize Backup file size in bytes. If the parameter value is `0`, the backup file size is unknown.
     * @param string $DownloadUrl Address (valid for six hours) used to download the backup file over the public network
     * @param string $InnerDownloadUrl Address (valid for six hours) used to download the backup file over the private network
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

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("InnerDownloadUrl",$param) and $param["InnerDownloadUrl"] !== null) {
            $this->InnerDownloadUrl = $param["InnerDownloadUrl"];
        }
    }
}
