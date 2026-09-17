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
 * 
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getOriginalStorageClass() Obtain 
 * @method void setOriginalStorageClass(string $OriginalStorageClass) Set 
 * @method string getTargetStorageClass() Obtain 
 * @method void setTargetStorageClass(string $TargetStorageClass) Set 
 * @method string getRestoreTier() Obtain 
 * @method void setRestoreTier(string $RestoreTier) Set 
 * @method integer getRestoreDay() Obtain 
 * @method void setRestoreDay(integer $RestoreDay) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 */
class RestoreMediaTask extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $OriginalStorageClass;

    /**
     * @var string 
     */
    public $TargetStorageClass;

    /**
     * @var string 
     */
    public $RestoreTier;

    /**
     * @var integer 
     */
    public $RestoreDay;

    /**
     * @var integer 
     * @deprecated
     */
    public $Status;

    /**
     * @var string 
     * @deprecated
     */
    public $Message;

    /**
     * @param string $FileId 
     * @param string $OriginalStorageClass 
     * @param string $TargetStorageClass 
     * @param string $RestoreTier 
     * @param integer $RestoreDay 
     * @param integer $Status 
     * @param string $Message 
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
