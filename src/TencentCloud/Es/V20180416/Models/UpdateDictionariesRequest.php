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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDictionaries request structure.
 *
 * @method string getInstanceId() Obtain ES instance ID
 * @method void setInstanceId(string $InstanceId) Set ES instance ID
 * @method array getIkMainDicts() Obtain COS address of the main dictionary for the IK analyzer
 * @method void setIkMainDicts(array $IkMainDicts) Set COS address of the main dictionary for the IK analyzer
 * @method array getIkStopwords() Obtain COS address of the stopword dictionary for the IK analyzer
 * @method void setIkStopwords(array $IkStopwords) Set COS address of the stopword dictionary for the IK analyzer
 * @method array getSynonym() Obtain COS address of the synonym dictionary
 * @method void setSynonym(array $Synonym) Set COS address of the synonym dictionary
 * @method array getQQDict() Obtain COS address of the QQ dictionary
 * @method void setQQDict(array $QQDict) Set COS address of the QQ dictionary
 * @method integer getUpdateType() Obtain `0` (default): Install, `1`: Delete
 * @method void setUpdateType(integer $UpdateType) Set `0` (default): Install, `1`: Delete
 * @method boolean getForceRestart() Obtain Whether to force restart the cluster. The default value is `false`.
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart the cluster. The default value is `false`.
 */
class UpdateDictionariesRequest extends AbstractModel
{
    /**
     * @var string ES instance ID
     */
    public $InstanceId;

    /**
     * @var array COS address of the main dictionary for the IK analyzer
     */
    public $IkMainDicts;

    /**
     * @var array COS address of the stopword dictionary for the IK analyzer
     */
    public $IkStopwords;

    /**
     * @var array COS address of the synonym dictionary
     */
    public $Synonym;

    /**
     * @var array COS address of the QQ dictionary
     */
    public $QQDict;

    /**
     * @var integer `0` (default): Install, `1`: Delete
     */
    public $UpdateType;

    /**
     * @var boolean Whether to force restart the cluster. The default value is `false`.
     */
    public $ForceRestart;

    /**
     * @param string $InstanceId ES instance ID
     * @param array $IkMainDicts COS address of the main dictionary for the IK analyzer
     * @param array $IkStopwords COS address of the stopword dictionary for the IK analyzer
     * @param array $Synonym COS address of the synonym dictionary
     * @param array $QQDict COS address of the QQ dictionary
     * @param integer $UpdateType `0` (default): Install, `1`: Delete
     * @param boolean $ForceRestart Whether to force restart the cluster. The default value is `false`.
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
