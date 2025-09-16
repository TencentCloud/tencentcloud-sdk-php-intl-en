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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CFS storage configurations.
 *
 * @method string getId() Obtain CFS instance ID.
 * @method void setId(string $Id) Set CFS instance ID.
 * @method string getPath() Obtain Storage path.
 * @method void setPath(string $Path) Set Storage path.
 * @method string getMountType() Obtain Mounting type of CFS. Valid values: STORAGE and SOURCE, which respectively indicate the storage expansion mode and the data source mode. The default value is STORAGE.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMountType(string $MountType) Set Mounting type of CFS. Valid values: STORAGE and SOURCE, which respectively indicate the storage expansion mode and the data source mode. The default value is STORAGE.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol. Valid values: NFS and TURBO.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: NFS and TURBO.Note: This field may return null, indicating that no valid values can be obtained.
 */
class CFSConfig extends AbstractModel
{
    /**
     * @var string CFS instance ID.
     */
    public $Id;

    /**
     * @var string Storage path.
     */
    public $Path;

    /**
     * @var string Mounting type of CFS. Valid values: STORAGE and SOURCE, which respectively indicate the storage expansion mode and the data source mode. The default value is STORAGE.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MountType;

    /**
     * @var string Protocol. Valid values: NFS and TURBO.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @param string $Id CFS instance ID.
     * @param string $Path Storage path.
     * @param string $MountType Mounting type of CFS. Valid values: STORAGE and SOURCE, which respectively indicate the storage expansion mode and the data source mode. The default value is STORAGE.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol. Valid values: NFS and TURBO.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("MountType",$param) and $param["MountType"] !== null) {
            $this->MountType = $param["MountType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
