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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDictionaries request structure.
 *
 * @method string getInstanceId() Obtain ES instance ID.
 * @method void setInstanceId(string $InstanceId) Set ES instance ID.
 * @method array getIkMainDicts() Obtain Address of the COS main dictionary for IK word segmentation entered during installation, and the dictionary name such as test.dic entered during deletion.
 * @method void setIkMainDicts(array $IkMainDicts) Set Address of the COS main dictionary for IK word segmentation entered during installation, and the dictionary name such as test.dic entered during deletion.
 * @method array getIkStopwords() Obtain Address of the COS stopword dictionary for IK word segmentation during installation. When deleting, enter the dictionary name, for example, test.dic.
 * @method void setIkStopwords(array $IkStopwords) Set Address of the COS stopword dictionary for IK word segmentation during installation. When deleting, enter the dictionary name, for example, test.dic.
 * @method array getSynonym() Obtain Address of the synonym dictionary COS during installation, and the dictionary name such as test.dic when deleting.
 * @method void setSynonym(array $Synonym) Set Address of the synonym dictionary COS during installation, and the dictionary name such as test.dic when deleting.
 * @method array getQQDict() Obtain Address of the COS QQ tokenizer dictionary during installation, and the dictionary name such as test.dic during deletion.
 * @method void setQQDict(array $QQDict) Set Address of the COS QQ tokenizer dictionary during installation, and the dictionary name such as test.dic during deletion.
 * @method integer getUpdateType() Obtain 0: installation; 1: deletion. Default value: 0
 * @method void setUpdateType(integer $UpdateType) Set 0: installation; 1: deletion. Default value: 0
 * @method boolean getForceRestart() Obtain Whether to force restart the cluster. Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart the cluster. Default value: false
 */
class UpdateDictionariesRequest extends AbstractModel
{
    /**
     * @var string ES instance ID.
     */
    public $InstanceId;

    /**
     * @var array Address of the COS main dictionary for IK word segmentation entered during installation, and the dictionary name such as test.dic entered during deletion.
     */
    public $IkMainDicts;

    /**
     * @var array Address of the COS stopword dictionary for IK word segmentation during installation. When deleting, enter the dictionary name, for example, test.dic.
     */
    public $IkStopwords;

    /**
     * @var array Address of the synonym dictionary COS during installation, and the dictionary name such as test.dic when deleting.
     */
    public $Synonym;

    /**
     * @var array Address of the COS QQ tokenizer dictionary during installation, and the dictionary name such as test.dic during deletion.
     */
    public $QQDict;

    /**
     * @var integer 0: installation; 1: deletion. Default value: 0
     */
    public $UpdateType;

    /**
     * @var boolean Whether to force restart the cluster. Default value: false
     */
    public $ForceRestart;

    /**
     * @param string $InstanceId ES instance ID.
     * @param array $IkMainDicts Address of the COS main dictionary for IK word segmentation entered during installation, and the dictionary name such as test.dic entered during deletion.
     * @param array $IkStopwords Address of the COS stopword dictionary for IK word segmentation during installation. When deleting, enter the dictionary name, for example, test.dic.
     * @param array $Synonym Address of the synonym dictionary COS during installation, and the dictionary name such as test.dic when deleting.
     * @param array $QQDict Address of the COS QQ tokenizer dictionary during installation, and the dictionary name such as test.dic during deletion.
     * @param integer $UpdateType 0: installation; 1: deletion. Default value: 0
     * @param boolean $ForceRestart Whether to force restart the cluster. Default value: false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IkMainDicts",$param) and $param["IkMainDicts"] !== null) {
            $this->IkMainDicts = $param["IkMainDicts"];
        }

        if (array_key_exists("IkStopwords",$param) and $param["IkStopwords"] !== null) {
            $this->IkStopwords = $param["IkStopwords"];
        }

        if (array_key_exists("Synonym",$param) and $param["Synonym"] !== null) {
            $this->Synonym = $param["Synonym"];
        }

        if (array_key_exists("QQDict",$param) and $param["QQDict"] !== null) {
            $this->QQDict = $param["QQDict"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }
    }
}
