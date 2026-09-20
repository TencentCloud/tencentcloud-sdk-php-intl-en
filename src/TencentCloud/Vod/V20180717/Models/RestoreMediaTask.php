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
 * Retrieve video task information
 *
 * @method string getFileId() Obtain File ID.
 * @method void setFileId(string $FileId) Set File ID.
 * @method string getOriginalStorageClass() Obtain Original storage type of the file.
 * @method void setOriginalStorageClass(string $OriginalStorageClass) Set Original storage type of the file.
 * @method string getTargetStorageClass() Obtain Destination storage class of the file. For temporary retrieval, the destination storage class is the same as the original storage class.
 * @method void setTargetStorageClass(string $TargetStorageClass) Set Destination storage class of the file. For temporary retrieval, the destination storage class is the same as the original storage class.
 * @method string getRestoreTier() Obtain Retrieval mode. Valid values:
<li>Expedited: speed mode</li>
<li>Standard: standard mode</li>
<li>Bulk: batch mode</li>
 * @method void setRestoreTier(string $RestoreTier) Set Retrieval mode. Valid values:
<li>Expedited: speed mode</li>
<li>Standard: standard mode</li>
<li>Bulk: batch mode</li>
 * @method integer getRestoreDay() Obtain Temporary retrieval replica validity period in days. For permanent retrieval, the value is 0.
 * @method void setRestoreDay(integer $RestoreDay) Set Temporary retrieval replica validity period in days. For permanent retrieval, the value is 0.
 * @method integer getStatus() Obtain Deprecated.
 * @method void setStatus(integer $Status) Set Deprecated.
 * @method string getMessage() Obtain Deprecated.
 * @method void setMessage(string $Message) Set Deprecated.
 */
class RestoreMediaTask extends AbstractModel
{
    /**
     * @var string File ID.
     */
    public $FileId;

    /**
     * @var string Original storage type of the file.
     */
    public $OriginalStorageClass;

    /**
     * @var string Destination storage class of the file. For temporary retrieval, the destination storage class is the same as the original storage class.
     */
    public $TargetStorageClass;

    /**
     * @var string Retrieval mode. Valid values:
<li>Expedited: speed mode</li>
<li>Standard: standard mode</li>
<li>Bulk: batch mode</li>
     */
    public $RestoreTier;

    /**
     * @var integer Temporary retrieval replica validity period in days. For permanent retrieval, the value is 0.
     */
    public $RestoreDay;

    /**
     * @var integer Deprecated.
     * @deprecated
     */
    public $Status;

    /**
     * @var string Deprecated.
     * @deprecated
     */
    public $Message;

    /**
     * @param string $FileId File ID.
     * @param string $OriginalStorageClass Original storage type of the file.
     * @param string $TargetStorageClass Destination storage class of the file. For temporary retrieval, the destination storage class is the same as the original storage class.
     * @param string $RestoreTier Retrieval mode. Valid values:
<li>Expedited: speed mode</li>
<li>Standard: standard mode</li>
<li>Bulk: batch mode</li>
     * @param integer $RestoreDay Temporary retrieval replica validity period in days. For permanent retrieval, the value is 0.
     * @param integer $Status Deprecated.
     * @param string $Message Deprecated.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("OriginalStorageClass",$param) and $param["OriginalStorageClass"] !== null) {
            $this->OriginalStorageClass = $param["OriginalStorageClass"];
        }

        if (array_key_exists("TargetStorageClass",$param) and $param["TargetStorageClass"] !== null) {
            $this->TargetStorageClass = $param["TargetStorageClass"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }

        if (array_key_exists("RestoreDay",$param) and $param["RestoreDay"] !== null) {
            $this->RestoreDay = $param["RestoreDay"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
