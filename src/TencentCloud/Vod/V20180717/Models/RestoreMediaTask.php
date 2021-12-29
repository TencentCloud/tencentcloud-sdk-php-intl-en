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
 * Video retrieval task information
 *
 * @method string getFileId() Obtain File ID
 * @method void setFileId(string $FileId) Set File ID
 * @method string getOriginalStorageClass() Obtain Original storage class
 * @method void setOriginalStorageClass(string $OriginalStorageClass) Set Original storage class
 * @method string getTargetStorageClass() Obtain Target storage class. For temporary retrieval, the target storage class is the same as the original.
 * @method void setTargetStorageClass(string $TargetStorageClass) Set Target storage class. For temporary retrieval, the target storage class is the same as the original.
 * @method string getRestoreTier() Obtain Retrieval mode. Valid values:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
 * @method void setRestoreTier(string $RestoreTier) Set Retrieval mode. Valid values:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
 * @method integer getRestoreDay() Obtain Validity period (days) for a temporary copy. `0` indicates permanent retrieval.
 * @method void setRestoreDay(integer $RestoreDay) Set Validity period (days) for a temporary copy. `0` indicates permanent retrieval.
 * @method integer getStatus() Obtain This field has been disused.
 * @method void setStatus(integer $Status) Set This field has been disused.
 * @method string getMessage() Obtain This field has been disused.
 * @method void setMessage(string $Message) Set This field has been disused.
 */
class RestoreMediaTask extends AbstractModel
{
    /**
     * @var string File ID
     */
    public $FileId;

    /**
     * @var string Original storage class
     */
    public $OriginalStorageClass;

    /**
     * @var string Target storage class. For temporary retrieval, the target storage class is the same as the original.
     */
    public $TargetStorageClass;

    /**
     * @var string Retrieval mode. Valid values:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
     */
    public $RestoreTier;

    /**
     * @var integer Validity period (days) for a temporary copy. `0` indicates permanent retrieval.
     */
    public $RestoreDay;

    /**
     * @var integer This field has been disused.
     */
    public $Status;

    /**
     * @var string This field has been disused.
     */
    public $Message;

    /**
     * @param string $FileId File ID
     * @param string $OriginalStorageClass Original storage class
     * @param string $TargetStorageClass Target storage class. For temporary retrieval, the target storage class is the same as the original.
     * @param string $RestoreTier Retrieval mode. Valid values:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
     * @param integer $RestoreDay Validity period (days) for a temporary copy. `0` indicates permanent retrieval.
     * @param integer $Status This field has been disused.
     * @param string $Message This field has been disused.
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
