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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned result set of hotword lexicon query.
 *
 * @method string getHotwordsId() Obtain Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHotwordsId(string $HotwordsId) Set Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Current hotword lexicon status. The value indicates the number of smart subtitle templates bound to this hotword lexicon.
If the Status value is 0, it indicates that the hotword lexicon is not referenced by any smart subtitle template and that it can be deleted.
If the Status value is not 0, it indicates that the hotword lexicon cannot be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Current hotword lexicon status. The value indicates the number of smart subtitle templates bound to this hotword lexicon.
If the Status value is 0, it indicates that the hotword lexicon is not referenced by any smart subtitle template and that it can be deleted.
If the Status value is not 0, it indicates that the hotword lexicon cannot be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getWordCount() Obtain Number of hotwords in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWordCount(integer $WordCount) Set Number of hotwords in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileName() Obtain Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileName(string $FileName) Set Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getType() Obtain 0: temporary hotword lexicon
1: file-based hotword lexicon
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(integer $Type) Set 0: temporary hotword lexicon
1: file-based hotword lexicon
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AsrHotwordsSet extends AbstractModel
{
    /**
     * @var string Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HotwordsId;

    /**
     * @var integer Current hotword lexicon status. The value indicates the number of smart subtitle templates bound to this hotword lexicon.
If the Status value is 0, it indicates that the hotword lexicon is not referenced by any smart subtitle template and that it can be deleted.
If the Status value is not 0, it indicates that the hotword lexicon cannot be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var integer Number of hotwords in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WordCount;

    /**
     * @var string Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileName;

    /**
     * @var string Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer 0: temporary hotword lexicon
1: file-based hotword lexicon
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @param string $HotwordsId Hotword lexicon ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Current hotword lexicon status. The value indicates the number of smart subtitle templates bound to this hotword lexicon.
If the Status value is 0, it indicates that the hotword lexicon is not referenced by any smart subtitle template and that it can be deleted.
If the Status value is not 0, it indicates that the hotword lexicon cannot be deleted.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Hotword lexicon name.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $WordCount Number of hotwords in the hotword lexicon.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileName Name of the uploaded hotword file.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Creation time of the hotword lexicon in ISO datetime format (UTC time). For example, 2006-01-02T15:04:05Z.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Type 0: temporary hotword lexicon
1: file-based hotword lexicon
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WordCount",$param) and $param["WordCount"] !== null) {
            $this->WordCount = $param["WordCount"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
